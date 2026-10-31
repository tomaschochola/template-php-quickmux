<?php

declare(strict_types=1);

namespace TomasChochola\Template\Quickmux\Integration;

use EmptyIterator;
use IteratorAggregate;
use Override;
use TomasChochola\Migrations\MigrationInterface;
use Traversable;

/**
 * @no-named-arguments
 *
 * @implements IteratorAggregate<mixed, MigrationInterface>
 */
readonly class MigrationManifest implements IteratorAggregate
{
    #[Override()]
    public function getIterator(): Traversable
    {
        return new EmptyIterator();
    }
}
