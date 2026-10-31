<?php

declare(strict_types=1);

namespace TomasChochola\Template\Quickmux\Integration;

use UnexpectedValueException;

use function getenv;
use function is_string;

/**
 * @no-named-arguments
 */
readonly class APP_ENV
{
    public static function current(): string
    {
        $env = getenv('APP_ENV');

        if (!is_string($env)) {
            throw new UnexpectedValueException('APP_ENV');
        }

        return $env;
    }
}
