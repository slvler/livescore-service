<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService;

use GuzzleHttp\Client;
use Slvler\LiveScoreService\Api\Coachs;
use Slvler\LiveScoreService\Api\Countries;
use Slvler\LiveScoreService\Api\Fixtures;
use Slvler\LiveScoreService\Api\General;
use Slvler\LiveScoreService\Api\Injuries;
use Slvler\LiveScoreService\Api\Leagues;
use Slvler\LiveScoreService\Api\Odds;
use Slvler\LiveScoreService\Api\Players;
use Slvler\LiveScoreService\Api\Predictions;
use Slvler\LiveScoreService\Api\Sidelined;
use Slvler\LiveScoreService\Api\Standings;
use Slvler\LiveScoreService\Api\Teams;
use Slvler\LiveScoreService\Api\Transfers;
use Slvler\LiveScoreService\Api\Trophies;
use Slvler\LiveScoreService\Api\Venues;
use Slvler\LiveScoreService\Log\Record;

class LiveScoreClient
{
    private $httpClient;

    protected $logged;

    public function __construct(?Client $client = null)
    {
        $this->logged = new Record;
        $this->httpClient = $client ?: new Client(
            [
                'handler' => $this->logged->loggered(),
            ]);
    }

    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    public function countries(): Countries
    {
        return new Countries($this);
    }

    public function leagues(): Leagues
    {
        return new Leagues($this);
    }

    public function general(): General
    {
        return new General($this);
    }

    public function team(): Teams
    {
        return new Teams($this);
    }

    public function venues(): Venues
    {
        return new Venues($this);
    }

    public function standings(): Standings
    {
        return new Standings($this);
    }

    public function fixtures(): Fixtures
    {
        return new Fixtures($this);
    }

    public function injuries(): Injuries
    {
        return new Injuries($this);
    }

    public function predictions(): Predictions
    {
        return new Predictions($this);
    }

    public function coachs(): Coachs
    {
        return new Coachs($this);
    }

    public function players(): Players
    {
        return new Players($this);
    }

    public function transfer(): Transfers
    {
        return new Transfers($this);
    }

    public function trophies(): Trophies
    {
        return new Trophies($this);
    }

    public function sidelined(): Sidelined
    {
        return new Sidelined($this);
    }

    public function odds(): Odds
    {
        return new Odds($this);
    }
}
