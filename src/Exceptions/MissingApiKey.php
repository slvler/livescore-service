<?php

declare(strict_types=1);

namespace Slvler\LiveScoreService\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Livescore API Key is missing. Please publish the [livescore.php] configuration file and set the [api_key].'
        );
    }
}
