<?php

namespace slvler\LiveScoreService\Tests;

use PHPUnit\Framework\TestCase;
use slvler\LiveScoreService\LiveScoreClient;

class LiveSoccerClientTest extends TestCase
{
    public function testget_all()
    {
        $client = new LiveScoreClient;
        $variable = $client->countries()->getAll(['code' => 'FR', 'name' => 'england']);
        $this->assertIsArray($variable);
    }

    public function testget_leagues()
    {
        $client = new LiveScoreClient;
        $variable = $client->leagues()->getLeagues(['season' => '2018', 'id' => '33']);
        $this->assertIsArray($variable);
    }

    public function testget_leagues_seasons()
    {
        $client = new LiveScoreClient;
        $variable = $client->leagues()->getLeaguesSeasons();
        $this->assertIsArray($variable);
    }

    public function testget_teams_information()
    {
        $client = new LiveScoreClient;
        $variable = $client->team()->getTeamsInformation(['id' => '33']);
        $this->assertIsArray($variable);
    }

    public function testget_teams_statistics()
    {
        $client = new LiveScoreClient;
        $variable = $client->team()->getTeamsStatistics(['league' => '39', 'team' => '33', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testget_team_countries()
    {
        $client = new LiveScoreClient;
        $variable = $client->team()->getTeamsStatistics(['league' => '39', 'team' => '33', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testget_venues()
    {
        $client = new LiveScoreClient;
        $variable = $client->venues()->getVenues(['name' => 'Old Trafford']);
        $this->assertIsArray($variable);
    }

    public function testget_standings()
    {
        $client = new LiveScoreClient;
        $variable = $client->standings()->getStandings(['league' => '39', 'season' => '2019']);
        $this->assertIsArray($variable);
    }

    public function testget_rounds()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getRounds(['league' => '39', 'season' => 2019]);
        $this->assertIsArray($variable);
    }

    public function testget_fixtures()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getFixtures(['id' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testget_head_to_head()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getHeadToHead(['h2h' => '33-34']);
        $this->assertIsArray($variable);
    }

    public function testget_statistics()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getStatistics(['fixture' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testget_events()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getEvents(['fixture' => '215662']);
        $this->assertIsArray($variable);
    }

    public function testget_lineups()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getLineups(['fixture' => '592872']);
        $this->assertIsArray($variable);
    }

    public function testget_players_statistics()
    {
        $client = new LiveScoreClient;
        $variable = $client->fixtures()->getPlayersStatistics(['fixture' => '169080']);
        $this->assertIsArray($variable);
    }

    public function testget_injuries()
    {
        $client = new LiveScoreClient;
        $variable = $client->injuries()->getInjuries(['league' => '2', 'season' => '2020']);
        $this->assertIsArray($variable);
    }

    public function testget_predictions()
    {
        $client = new LiveScoreClient;
        $variable = $client->predictions()->getPredictions(['fixture' => '198772']);
        $this->assertIsArray($variable);
    }

    public function testget_coachs()
    {
        $client = new LiveScoreClient;
        $variable = $client->coachs()->getCoachs(['id' => '1']);
        $this->assertIsArray($variable);
    }

    public function testget_seasons()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getSeasons(['player' => '276']);
        $this->assertIsArray($variable);
    }

    public function testget_players()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getPlayers(['id' => '19088', 'season' => '2018']);
        $this->assertIsArray($variable);
    }

    public function testget_squads()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getSquads(['team' => '33']);
        $this->assertIsArray($variable);
    }

    public function testget_top_scorers()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getTopScorers(['season' => '2018', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testget_top_assists()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getTopAssists(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testget_top_yellow_cards()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getTopYellowCards(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testget_top_red_cards()
    {
        $client = new LiveScoreClient;
        $variable = $client->players()->getTopRedCards(['season' => '2020', 'league' => '61']);
        $this->assertIsArray($variable);
    }

    public function testget_transfer()
    {
        $client = new LiveScoreClient;
        $variable = $client->transfer()->getTransfer(['player' => '35845']);
        $this->assertIsArray($variable);
    }

    public function testget_trophies()
    {
        $client = new LiveScoreClient;
        $variable = $client->trophies()->getTrophies(['player' => '35845']);
        $this->assertIsArray($variable);
    }

    public function testget_sidelined()
    {
        $client = new LiveScoreClient;
        $variable = $client->sidelined()->getSidelined(['player' => '276']);
        $this->assertIsArray($variable);
    }

    public function testget_odds_live()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOddsLive();
        $this->assertIsArray($variable);
    }

    public function testget_odds_liv_bets()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOddsLivBets(['id' => '1']);
        $this->assertIsArray($variable);
    }

    public function testget_odds()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOdds(['date' => '2020-05-15']);
        $this->assertIsArray($variable);
    }

    public function testget_odds_mapping()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOddsMapping();
        $this->assertIsArray($variable);
    }

    public function testget_odds_bookmakers()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOddsBookmakers();
        $this->assertIsArray($variable);
    }

    public function testget_odds_bets()
    {
        $client = new LiveScoreClient;
        $variable = $client->odds()->getOddsBets();
        $this->assertIsArray($variable);
    }

    public function testget_status()
    {
        $client = new LiveScoreClient;
        $variable = $client->general()->getStatus();
        $this->assertIsArray($variable);
    }
}
