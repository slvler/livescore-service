<?php

namespace slvler\LiveScoreService\Api;

class Sidelined extends Api
{
    use Setting;

    public function getSidelined(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];
        return $this->get('/sidelined', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }
}
