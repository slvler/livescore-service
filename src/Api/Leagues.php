<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

class Leagues extends Api
{
    use Setting;

    public function getLeagues(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/leagues', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getLeaguesSeasons(): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/leagues/seasons', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
        ]);
    }
}
