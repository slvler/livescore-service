<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

class Teams extends Api
{
    use Setting;

    public function getTeamsInformation(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/teams', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getTeamsStatistics(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/teams/statistics', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getTeamsSeasons(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/teams/seasons', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getTeamCountries(): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/teams/countries', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
        ]);
    }
}
