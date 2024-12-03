<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

class Trophies extends Api
{
    use Setting;

    public function getTrophies(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/trophies', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }
}
