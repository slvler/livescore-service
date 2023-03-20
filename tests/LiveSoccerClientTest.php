<?php

namespace slvler\LiveScoreService\Tests;

use PHPUnit\Framework\TestCase;
use slvler\LiveScoreService\LiveScoreClient;

class LiveSoccerClientTest extends TestCase
{
    public function testgetAll()
    {
        $client = new LiveScoreClient();
        $variable = $client->countries()->getAll(['code' => 'FR', 'name' => 'england']);
        $this->assertIsArray($variable);
    }
    public function testgetLeagues()
    {
        $client = new LiveScoreClient();
        $variable =$client->leagues()->getLeagues(['season' => '2018', 'id' => '33']);
        $this->assertIsArray($variable);
    }
    public function testgetLeaguesSeasons()
    {
        $client = new LiveScoreClient();
        $variable = $client->leagues()->getLeaguesSeasons();
        $this->assertIsArray($variable);
    }
    public function testgetTeamsInformation()
    {
        $client = new LiveScoreClient();
        $variable =  $client->team()->getTeamsInformation(['id' => "33"]);
        $this->assertIsArray($variable);
    }

    public function testgetTeamsStatistics()
    {
        $client = new LiveScoreClient();
        $variable =  $client->team()->getTeamsStatistics(['league' => '39', 'team' => '33', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testgetTeamCountries()
    {
        $client = new LiveScoreClient();
        $variable =  $client->team()->getTeamsStatistics(['league' => '39', 'team' => '33', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testgetVenues()
    {
        $client = new LiveScoreClient();
        $variable =  $client->venues()->getVenues([ 'name' => 'Old Trafford']);
        $this->assertIsArray($variable);
    }

    public function testgetStandings()
    {
        $client = new LiveScoreClient();
        $variable =  $client->standings()->getStandings([ 'league' => '39', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testgetRounds()
    {
        $client = new LiveScoreClient();
        $variable = $client->fixtures()->getRounds(['league' => '39', 'season' => 2019]);
        $this->assertIsArray($variable);
    }

    public function testgetFixtures()
    {
        $client = new LiveScoreClient();
        $variable = $client->fixtures()->getFixtures(['id' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testgetHeadToHead()
    {
        $client = new LiveScoreClient();
        $variable =  $client->fixtures()->getHeadToHead(['h2h' => '33-34']);
        $this->assertIsArray($variable);
    }

    public function testgetStatistics()
    {
        $client = new LiveScoreClient();
        $variable =  $client->fixtures()->getStatistics(['fixture' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testgetEvents()
    {
        $client = new LiveScoreClient();
        $variable = $client->fixtures()->getEvents(['fixture' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testgetLineups()
    {
        $client = new LiveScoreClient();
        $variable = $client->fixtures()->getLineups(['fixture' => '592872']);
        $this->assertIsArray($variable);
    }

    public function testgetPlayersStatistics()
    {
        $client = new LiveScoreClient();
        $variable = $client->fixtures()->getPlayersStatistics(['fixture' => '169080']);
        $this->assertIsArray($variable);
    }

    public function testgetInjuries()
    {
        $client = new LiveScoreClient();
        $variable = $client->injuries()->getInjuries(['league' => '2', 'season' => '2020']);
        $this->assertIsArray($variable);
    }

    public function testgetPredictions()
    {
        $client = new LiveScoreClient();
        $variable = $client->predictions()->getPredictions(['fixture' => '198772']);
        $this->assertIsArray($variable);
    }

    public function testgetCoachs()
    {
        $client = new LiveScoreClient();
        $variable =  $client->coachs()->getCoachs(['id' => '1']);
        $this->assertIsArray($variable);
    }

    public function testgetSeasons()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getSeasons(['player' => '276']);
        $this->assertIsArray($variable);
    }

    public function testgetPlayers()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getPlayers(['id' => '19088', 'season' => '2018']);
        $this->assertIsArray($variable);
    }

    public function testgetSquads()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getSquads(['team' => '33']);
        $this->assertIsArray($variable);
    }

    public function testgetTopScorers()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getTopScorers(['season' => '2018', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testgetTopAssists()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getTopAssists(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testgetTopYellowCards()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getTopYellowCards(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testgetTopRedCards()
    {
        $client = new LiveScoreClient();
        $variable = $client->players()->getTopRedCards(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testgetTransfer()
    {
        $client = new LiveScoreClient();
        $variable = $client->transfer()->getTransfer(['player' => '35845']);
        $this->assertIsArray($variable);
    }

    public function testgetTrophies()
    {
        $client = new LiveScoreClient();
        $variable = $client->trophies()->getTrophies(['player' => '35845']);
        $this->assertIsArray($variable);
    }

    public function testgetSidelined()
    {
        $client = new LiveScoreClient();
        $variable = $client->sidelined()->getSidelined(['player' => '276']);
        $this->assertIsArray($variable);
    }

    public function testgetOddsLive()
    {
        $client = new LiveScoreClient();
        $variable =  $client->odds()->getOddsLive();
        $this->assertIsArray($variable);
    }

    public function testgetOddsLivBets()
    {
        $client = new LiveScoreClient();
        $variable = $client->odds()->getOddsLivBets(['id' => "1"]);
        $this->assertIsArray($variable);
    }

    public function testgetOdds()
    {
        $client = new LiveScoreClient();
        $variable = $client->odds()->getOdds(['date' => "2020-05-15"]);
        $this->assertIsArray($variable);
    }

    public function testgetOddsMapping()
    {
        $client = new LiveScoreClient();
        $variable = $client->odds()->getOddsMapping();
        $this->assertIsArray($variable);
    }

    public function testgetOddsBookmakers()
    {
        $client = new LiveScoreClient();
        $variable = $client->odds()->getOddsBookmakers();
        $this->assertIsArray($variable);
    }

    public function testgetOddsBets()
    {
        $client = new LiveScoreClient();
        $variable = $client->odds()->getOddsBets();
        $this->assertIsArray($variable);
    }

    public function testgetStatus()
    {
        $client = new LiveScoreClient();
        $variable = $client->general()->getStatus();
        $this->assertIsArray($variable);
    }











}
