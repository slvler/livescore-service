<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

use InvalidArgumentException;
use Slvler\LiveScoreService\Exceptions\MissingApiKey;

trait Setting
{
    public static function getApiKey(): string
    {
        $apiKey = config('livescore.livescore.api_key');
        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        return $apiKey;
    }

    public static function getBaseUrl(): string
    {
        $baseURL = config('livescore.livescore.base_url');
        if (empty($baseURL) || ! isset($baseURL)) {
            throw new InvalidArgumentException('Invalid Livescore API base URL.');
        }

        return $baseURL;
    }
}
