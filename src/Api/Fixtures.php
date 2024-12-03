<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

class Fixtures extends Api
{
    use Setting;

    public function getRounds(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/rounds', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getFixtures(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getHeadToHead(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/headtohead', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getStatistics(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/statistics', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getEvents(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/events', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getLineups(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/lineups', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }

    public function getPlayersStatistics(array $params = []): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            'x-rapidapi-key' => Setting::getApiKey(),
        ];

        return $this->get('/fixtures/players', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers,
            'query' => $params,
        ]);
    }
}
