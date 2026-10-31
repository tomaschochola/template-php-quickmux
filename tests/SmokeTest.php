<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;

use function uniqid;

/**
 * @internal
 *
 * @no-named-arguments
 */
#[CoversNothing()]
#[Small()]
final class SmokeTest extends TestCase
{
    #[Test()]
    public function healthzLive(): void
    {
        $response = $this->handle($this->createServerRequest('GET', '/healthz/live'));

        self::assertSame(200, $response->getStatusCode());
    }

    #[Test()]
    public function notFound(): void
    {
        $response = $this->handle($this->createServerRequest('GET', '/' . uniqid('notfound')));

        self::assertSame(404, $response->getStatusCode());
    }
}
