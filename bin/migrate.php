<?php

declare(strict_types=1);

\set_error_handler(static function (int $severity, string $message, string $file, int $line): never {
    throw new \ErrorException($message, 0, $severity, $file, $line);
});

require_once __DIR__ . '/../vendor/autoload.php';

use TomasChochola\Migrations\MigratorInterface;
use TomasChochola\Psr\Container\Container;
use TomasChochola\Template\Quickmux\Integration\ContainerManifest;
use TomasChochola\Template\Quickmux\Integration\MigrationManifest;

$container = new Container(\iterator_to_array(new ContainerManifest()));

$migrator = $container->get(MigratorInterface::class);

\assert($migrator instanceof MigratorInterface);

$migrator->migrate(new MigrationManifest());
