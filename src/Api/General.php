<?php

namespace slvler\LiveScoreService\Api;

class General extends Api
{
    use Setting;

    public function getStatus(): array
    {
        $headers = [
            'x-rapidapi-host' => Setting::getBaseUrl(),
            "x-rapidapi-key" => Setting::getApiKey()
        ];

        return $this->get('/status', [
            'base_uri' => 'https://v3.football.api-sports.io',
            'headers' => $headers
        ]);
    }
}
