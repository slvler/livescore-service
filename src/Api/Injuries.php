<?php

namespace slvler\LiveScoreService\Api;

class Injuries extends Api
{
    use Setting;

    public function getInjuries(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];

        return $this->get('/injuries', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }
}
