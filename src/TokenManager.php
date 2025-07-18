<?php

namespace SiasnClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use SiasnClient\Config;

class TokenManager
{
    private Config $config;
    private string $cacheFile;

    public function __construct(Config $config, string $cachePath = __DIR__ . '/../token_cache.json')
    {
        $this->config = $config;
        $this->cacheFile = $cachePath;
    }

    public function getToken(): string
    {
        if ($this->isCachedTokenValid()) {
            $data = json_decode(file_get_contents($this->cacheFile), true);
            return $data['access_token'];
        }

        return $this->fetchNewToken();
    }

    private function isCachedTokenValid(): bool
    {
        if (!file_exists($this->cacheFile)) {
            return false;
        }

        $data = json_decode(file_get_contents($this->cacheFile), true);

        return isset($data['access_token'], $data['expires_at']) && time() < $data['expires_at'];
    }

    private function fetchNewToken(): string
    {
        try {
            $client = new \GuzzleHttp\Client();

            $response = $client->post($this->config->token_url, [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->config->consumer_key . ':' . $this->config->consumer_secret),
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials'
                ]
            ]);

            $body = json_decode((string)$response->getBody(), true);
            $access_token = $body['access_token'];
            $expires_in = $body['expires_in'] ?? 3600;

            // Simpan token ke file agar tidak selalu request
            file_put_contents($this->cacheFile, json_encode([
                'access_token' => $access_token,
                'expires_at' => time() + $expires_in - 60 // buffer 1 menit
            ]));

            return $access_token;
        } catch (\Throwable $e) {
            throw new \RuntimeException('Gagal ambil token: ' . $e->getMessage());
        }
    }
}
