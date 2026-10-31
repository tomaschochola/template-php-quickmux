<?php

declare(strict_types=1);

namespace TomasChochola\Template\Quickmux\Integration;

use function apcu_enabled;
use function opcache_is_script_cached;

use const PHP_SAPI;

/**
 * @no-named-arguments
 */
readonly class CONTAINER_CACHE
{
    public static function current(): bool
    {
        return apcu_enabled() && opcache_is_script_cached(__FILE__) && PHP_SAPI !== 'cli' && PHP_SAPI !== 'cli-server' && PHP_SAPI !== 'phpdbg';
    }
}
