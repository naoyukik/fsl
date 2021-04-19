<?php

namespace tests\lib;

use PHPUnit\Framework\TestCase;

class FslTest extends TestCase
{
    /**
     * @testdox request methods return array
     */
    public function testRequestMethods(): void
    {
        $arr = request_methods();
        self::assertIsArray($arr);
    }
}
