<?php

namespace slvler\LiveScoreService\Api;

class Transfers extends Api
{
    use Setting;

    public function getTransfer(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];

        return $this->get('/transfers', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }
}
