<?php

declare(strict_types=1);

namespace slvler\LiveScoreService;

use Illuminate\Support\ServiceProvider;
use Slvler\LiveScoreService\Facades\LiveScore;

class LiveScoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('LiveScore', function ($app) {
            return new LiveScore();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/livescore.php' => config_path('livescore.php'),
        ], 'livescore');
    }
}
