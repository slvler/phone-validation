<?php

declare(strict_types=1);

namespace Slvler\PhoneValidation\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The abstractapi API Key is missing. Please publish the [phone.php] configuration file and set the [api_key].'
        );
    }
}