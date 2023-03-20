<?php
declare(strict_types=1);

namespace slvler\LiveScoreService\Api;

use slvler\LiveScoreService\LiveScoreClient;
use slvler\LiveScoreService\Message\ResponseTransformer;
use Exception;

class Api
{
    protected $client;

    protected $transformer;

    public function __construct(LiveScoreClient $client)
    {
        $this->client = $client;
    }

    public function get(string $uri,  array $option = [])
    {
        $response = $this->client->getHttpClient()->request("GET", $uri , $option);
        $this->transformer = new ResponseTransformer($response);
        return $this->transformer->toArray();
    }


}
