<?php

namespace slvler\LiveScoreService\Api;

class Predictions extends Api
{
    use Setting;

    public function getPredictions(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];
        return $this->get('/predictions', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params
        ]);
    }

}
