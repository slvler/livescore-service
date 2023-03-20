<?php

namespace slvler\LiveScoreService\Api;

trait Setting
{

    public static function getApiKey(): string
    {
        return config('livescore.livescore.api_key');
    }

    public static function getBaseUrl(): string
    {
        return config('livescore.livescore.base_url');
    }


}
