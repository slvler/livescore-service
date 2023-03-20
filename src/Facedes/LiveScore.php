<?php
namespace slvler\LiveScoreService\Facades;

use Illuminate\Support\Facades\Facade;

class LiveScore extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LiveScore';
    }
}
