<?php

namespace slvler\LiveScoreService\Api;

class Coachs extends Api
{
    use Setting;

    public function getCoachs(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];
        return $this->get('/coachs', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }
}
