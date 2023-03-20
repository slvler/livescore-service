<?php

namespace slvler\LiveScoreService;

use Illuminate\Support\ServiceProvider;
use slvler\LiveScoreService\Facades\LiveScore;

class LiveScoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('LiveScore', function($app) {
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
