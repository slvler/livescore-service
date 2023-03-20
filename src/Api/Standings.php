<?php

namespace slvler\LiveScoreService\Api;

class Standings extends Api
{
    use Setting;

    public function getStandings(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];

        return $this->get('/standings', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }
}
