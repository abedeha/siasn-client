<?php

namespace SiasnClient;

class Config
{
    public string $client_id;
    public string $consumer_key;
    public string $consumer_secret;
    public string $token_sso;
    public string $token_url;
    public string $base_url;

    public function __construct()
    {
        $this->client_id     = 'CLIENT ID ANDA';
        $this->consumer_key = 'CONSUMER KEY ANDA';
        $this->consumer_secret = 'CONSUMER SECRET ANDA';
        $this->token_sso = 'TOKEN SSON ANDA';
        $this->token_url     = 'URL TOKEN';
        $this->base_url      = 'BASE URL API BKN';
    }
}
