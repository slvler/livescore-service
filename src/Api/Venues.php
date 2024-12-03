<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

class Venues extends Api
{
    use Setting;

    public function getVenues(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/venues', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }
}
