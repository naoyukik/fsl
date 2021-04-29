<?php

declare(strict_types=1);

namespace tests\lib;

use PHPUnit\Framework\TestCase;

class FslTest extends TestCase
{
    public function testRequestMethods(): void
    {
        $arr = request_methods();
        self::assertIsArray($arr);
    }
}
