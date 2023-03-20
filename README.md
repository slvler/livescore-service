# slvler - Live Score Service

[![tests](https://github.com/slvler/phone-validation/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/phone-validation/actions/workflows/tests.yml)
[![Latest Stable Version](http://poser.pugx.org/slvler/phone-validation/v)](https://packagist.org/packages/slvler/phone-validation)
[![Latest Unstable Version](http://poser.pugx.org/slvler/phone-validation/v/unstable)](https://packagist.org/packages/slvler/phone-validation)
[![License](http://poser.pugx.org/slvler/phone-validation/license)](https://packagist.org/packages/slvler/phone-validation)


Live Score Client for api-football.com

Welcome to Api-Football! You can use our API to access all API endpoints, which can get information about Football Leagues & Cups.

## Installation

To install this package tou can use composer:

```bash
    composer require slvler/livescore-service
```
## Usage

- First, you should extract the config/livescore.php file to the config folder.

```php
    php artisan vendor:publish --tag=livescore
```

- API key to be obtained from api-football.com address should be declared. This is your private API key, specific to this API.

```php
    'livescore' => [
        'base_url' => 'v3.football.api-sports.io',
        'api_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    ],
```

## Basic usage


### Example
```php
use slvler\LiveScoreService\LiveScoreClient;

$client = new LiveScoreClient();
```

## Available methods

### General

#### [Status](https://www.api-football.com/documentation-v3)

Get the list status

```php
$data = $client->general()->getStatus();
```

### Countries

#### [Countries](https://www.api-football.com/documentation-v3#tag/Countries)

Get the list of available countries for the leagues endpoint.

```php
$data = $client->countries()->getAll();
```

The name and code fields can be used in other endpoints as filters.

```php
$data = $client->countries()->getAll(['code' => 'FR']);
```

### Leagues

#### [Countries](https://www.api-football.com/documentation-v3#tag/Leagues)

Get the list of available leagues and cups. This endpoint also returns the coverage of each competition, which makes it possible to know what is available for that league or cup.

```php
 $variable =  $client->leagues()->getLeagues(['season' => '2018', 'id' => '33']);
```

#### [Seasons](https://www.api-football.com/documentation-v3#tag/Leagues/operation/get-seasons)

All seasons are only 4-digit keys, so for a league whose season is 2018-2019 like the English Premier League (EPL), the 2018-2019 season in the API will be 2018.

```php
 $variable =  $client->leagues()->getLeaguesSeasons();
```

### Teams

#### [Teams Information](https://www.api-football.com/documentation-v3#tag/Teams)

Get the list of available teams. The team id are unique in the API and teams keep it among all the leagues/cups in which they participate.

```php
 $variable =  $client->team()->getTeamsInformation(['name' => 'manchester united']);
```

#### [Teams Statistics](https://www.api-football.com/documentation-v3#tag/Teams/operation/get-teams)

The team id are unique in the API and teams keep it among all the leagues/cups in which they participate.

```php
 $variable =  $client->team()->getTeamsStatistics(['league' => '39', 'team' => '33', 'season' => '2019']);
```

#### [Teams Seasons](https://www.api-football.com/documentation-v3#tag/Teams/operation/get-teams-seasons)

Get the list of seasons available for a team.
```php
 $variable = $client->team()->getTeamsSeasons(['team' => '33']);
```

#### [Teams Countries](https://www.api-football.com/documentation-v3#tag/Teams/operation/get-teams-countries)

Get the list of countries available for the teams endpoint.

```php
 $variable = $client->team()->getTeamCountries();
```

### Venues

#### [Venues](https://www.api-football.com/documentation-v3#tag/Venues)

Get the list of available venues. The venue id are unique in the API.

```php
 $variable =  $client->venues()->getVenues(['name' => 'Old Trafford']);
```

### Standings

#### [Standings](https://www.api-football.com/documentation-v3#tag/Standings)

Get the standings for a league or a team. Return a table of one or more rankings according to the league / cup.

```php
 $variable =  $client->standings()->getStandings([ 'league' => '39', 'season' => '2019']);
```

### Fixtures

#### [Rounds](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-rounds)

Get the rounds for a league or a cup. The round can be used in endpoint fixtures as filters

```php
 $variable =  $client->fixtures()->getRounds(['league' => '39', 'season' => 2019]);
```

#### [Fixtures](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures)

For all requests to fixtures you can add the query parameter timezone to your request in order to retrieve the list of matches in the time zone of your choice like “Europe/London“

```php
 $variable = $client->fixtures()->getFixtures(['id' => '215662']);
```

#### [Head To Head](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-headtohead)

Get heads to heads between two teams.

```php
 $variable = $client->fixtures()->getHeadToHead(['h2h' => '33-34']);
```

#### [Statistics](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-statistics)

Get the statistics for one fixture.

```php
 $variable = $client->fixtures()->getStatistics(['fixture' => '215662']);
```

#### [Events](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-events)

Get the events from a fixture.

```php
 $variable = $client->fixtures()->getEvents(['fixture' => '215662']);
```

#### [Lineups](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-events)

Get the lineups for a fixture.
Lineups are available between 20 and 40 minutes before the fixture when the competition covers this feature. You can check this with the endpoint leagues and the coverage field.

```php
 $variable = $client->fixtures()->getLineups(['fixture' => '592872']);
```

#### [Players statistics](https://www.api-football.com/documentation-v3#tag/Fixtures/operation/get-fixtures-players)

Get the players statistics from one fixture.

```php
 $variable = $client->fixtures()->getPlayersStatistics(['fixture' => '169080']);
```

### Injuries

#### [Injuries](https://www.api-football.com/documentation-v3#tag/Injuries/operation/get-injuries)

Get the list of players not participating in the fixtures for various reasons such as suspended, injured for example

```php
 $variable = $client->injuries()->getInjuries(['league' => '2', 'season' => '2020']);
```

### Predictions

#### [Predictions](https://www.api-football.com/documentation-v3#tag/Predictions/operation/get-predictions)

Get predictions about a fixture.
The predictions are made using several algorithms including the poisson distribution, comparison of team statistics, last matches, players etc…

```php
 $variable = $client->predictions()->getPredictions(['fixture' => '198772']);
```

### Coachs

#### [Coachs](https://www.api-football.com/documentation-v3#tag/Coachs/operation/get-coachs)

Get all the information about the coachs and their careers.

```php
 $variable = $client->coachs()->getCoachs(['id' => '1']);
```

### Players

#### [Seasons](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-seasons)

Get all available seasons for players statistics.

```php
 $variable = $client->players()->getSeasons(['player' => '276']);
```

#### [Players](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players)

Get players statistics.

```php
 $variable = $client->players()->getPlayers(['id' => '19088', 'season' => '2018']);
```

#### [Squads](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-squads)

Return the current squad of a team when the team parameter is used. When the player parameter is used the endpoint returns the set of teams associated with the player.

```php
 $variable = $client->players()->getSquads(['team' => '33']);
```

#### [Top Scorers](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-topscorers)

Get the 20 best players for a league or cup.

```php
 $variable = $client->players()->getTopScorers(['season' => '2018', 'league' => '61']);
```

#### [Top Assists](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-topassists)

Get the 20 best players assists for a league or cup.
```php
 $variable = $client->players()->getTopAssists(['season' => '2020', 'league' => '61']);
```

#### [Top Yellow Cards](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-topyellowcards)

Get the 20 players with the most yellow cards for a league or cup.

```php
 $variable = $client->players()->getTopYellowCards(['season' => '2020', 'league' => '61']);
```

#### [Top Red Cards](https://www.api-football.com/documentation-v3#tag/Players/operation/get-players-topredcards)

Get the 20 players with the most red cards for a league or cup.

```php
 $variable =  $client->players()->getTopRedCards(['season' => '2020', 'league' => '61']);
```

### Transfers

#### [Transfers](https://www.api-football.com/documentation-v3#tag/Transfers/operation/get-transfers)

Get all available transfers for players and teams

```php
 $variable = $client->transfer()->getTransfer(['player' => '35845']);
```

### Trophies

#### [Transfers](https://www.api-football.com/documentation-v3#tag/Trophies/operation/get-trophies)

Get all available trophies for a player or a coach.

```php
 $variable = $client->trophies()->getTrophies(['player' => '35845']);
```

### Sidelined

#### [Sidelined](https://www.api-football.com/documentation-v3#tag/Sidelined/operation/get-sidelined)

Get all available sidelined for a player or a coach.

```php
 $variable = $client->sidelined()->getSidelined(['player' => '276']);
```

### Odds

#### [Odds / Live](https://www.api-football.com/documentation-v3#tag/Odds-(In-Play)/operation/get-odds-live)

This endpoint returns in-play odds for fixtures in progress.

```php
 $variable = $client->odds()->getOddsLive();
```

#### [Odds / Live / Bets](https://www.api-football.com/documentation-v3#tag/Odds-(In-Play)/operation/get-bets)

Get all available bets for in-play odds.

```php
 $variable = $client->odds()->getOddsLivBets(['id' => "1"]);
```

#### [Odds](https://www.api-football.com/documentation-v3#tag/Odds-(Pre-Match)/operation/get-odds)

Get odds from fixtures, leagues or date.

```php
 $variable = $client->odds()->getOdds(['date' => "2020-05-15"]);
```

#### [Mapping](https://www.api-football.com/documentation-v3#tag/Odds-(Pre-Match)/operation/get-odds-mapping)

Get the list of available fixtures id for the endpoint odds.

```php
 $variable =  $client->odds()->getOddsMapping();
```

#### [Bookmakers](https://www.api-football.com/documentation-v3#tag/Odds-(Pre-Match)/operation/get-bookmakers)

Get all available bookmakers.

```php
 $variable = $client->odds()->getOddsBookmakers();
```

#### [Bets](https://www.api-football.com/documentation-v3#tag/Odds-(Pre-Match)/operation/get-bets)

Get all available bets for pre-match odds.

```php
 $variable =  $client->odds()->getOddsBets();
```




### Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)


## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/btcturk-api/blob/main/LICENSE) for more information.

