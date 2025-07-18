<?php

namespace SiasnClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class HttpRequest
{

    private static function getDefaultHeaders(string $type = 'json'): array
    {
        $config = new Config();
        $tokenManager = new TokenManager($config);
        $token = $tokenManager->getToken();

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Auth' => 'Bearer ' . $config->token_sso,
            'Accept' => 'application/json',
        ];

        // Sesuaikan Content-Type
        if ($type === 'json') {
            $headers['Content-Type'] = 'application/json';
        } elseif ($type === 'form') {
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        } elseif ($type === 'multipart') {
        }

        return $headers;
    }

    public static function get(string $url): array
    {
        try {
            $client = new Client();
            $res = $client->get($url, [
                'headers' => self::getDefaultHeaders()
            ]);

            $result = json_decode((string)$res->getBody(), true);

            if (isset($result['code']) && $result['code'] == 1) {
                return [
                    'status' => true,
                    'message' => 'Data ditemukan',
                    'data' => $result['data']
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Sepertinya terjadi kesalahan dengan SIASN!'
                ];
            }
        } catch (\Throwable $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public static function post(string $url, array $data, string $type = 'json'): array
    {
        try {
            $client = new Client();
            $options = [
                'headers' => self::getDefaultHeaders($type),
            ];

            if ($type === 'json') {
                $options['json'] = $data;
            } elseif ($type === 'form') {
                $options['form_params'] = $data;
            } elseif ($type === 'multipart') {
                $options['multipart'] = $data;
            }

            $res = $client->post($url, $options);

            return [
                'status' => true,
                'response' => json_decode((string)$res->getBody(), true)
            ];
        } catch (\Throwable $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public static function delete(string $url): array
    {
        try {
            $client = new Client();
            $res = $client->delete($url, [
                'headers' => self::getDefaultHeaders()
            ]);

            return [
                'status' => true,
                'response' => json_decode((string)$res->getBody(), true)
            ];
        } catch (\Throwable $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }


    public static function streamFileToBrowser(string $url): void
    {
        try {
            $client = new Client();
            $res = $client->get($url, [
                'headers' => self::getDefaultHeaders(),
                'stream' => true,
            ]);

            // Set header PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="file_siasn.pdf"');

            // Stream ke browser
            echo $res->getBody();
            exit;
        } catch (\Throwable $e) {
            http_response_code(500);
            echo "Gagal menampilkan file: " . $e->getMessage();
            exit;
        }
    }
}
