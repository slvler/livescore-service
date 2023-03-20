<?php

declare(strict_types=1);

namespace slvler\LiveScoreService;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use slvler\LiveScoreService\Api\Coachs;
use slvler\LiveScoreService\Api\Countries;
use slvler\LiveScoreService\Api\Fixtures;
use slvler\LiveScoreService\Api\General;
use slvler\LiveScoreService\Api\Injuries;
use slvler\LiveScoreService\Api\Leagues;
use slvler\LiveScoreService\Api\Odds;
use slvler\LiveScoreService\Api\Players;
use slvler\LiveScoreService\Api\Predictions;
use slvler\LiveScoreService\Api\Sidelined;
use slvler\LiveScoreService\Api\Standings;
use slvler\LiveScoreService\Api\Teams;
use slvler\LiveScoreService\Api\Transfers;
use slvler\LiveScoreService\Api\Trophies;
use slvler\LiveScoreService\Api\Venues;
use slvler\LiveScoreService\Log\Record;

class LiveScoreClient
{

    private $httpClient;

    protected $logged;

    public function __construct(?Client $client = null)
    {
        $this->logged = new Record();
        $this->httpClient = $client ?: new Client(
            [
                'handler' => $this->logged->loggered()
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
