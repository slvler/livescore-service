<?php
declare(strict_types=1);

namespace slvler\LiveScoreService\Message;

use Exception;
use slvler\LiveScoreService\Exceptions\TransformResponseException;


class ResponseTransformer
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody(): string
    {
        return (string) $this->response->getBody();
    }
    public function toArray(): array
    {
        $body = (string) $this->response->getBody();

        if (strpos($this->response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }

            throw new TransformResponseException('Error transforming response to array. JSON_ERROR: '
                . json_last_error() . ' --' . $body . '---');
        }

        throw new TransformResponseException('Error transforming response to array. Content-Type
            is not application/json');
    }

}
