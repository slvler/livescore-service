<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Api;

use Slvler\LiveScoreService\LiveScoreClient;
use Slvler\LiveScoreService\Message\ResponseTransformer;

class Api
{
    protected $client;

    protected $transformer;

    public function __construct(LiveScoreClient $client)
    {
        $this->client = $client;
    }

    public function get(string $uri, array $option = [])
    {
        $response = $this->client->getHttpClient()->request('GET', $uri, $option);
        $this->transformer = new ResponseTransformer($response);

        return $this->transformer->toArray();
    }
}
