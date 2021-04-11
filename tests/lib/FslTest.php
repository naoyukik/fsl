<?php

namespace tests\lib;

use PHPUnit\Framework\TestCase;

class FslTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        require './vendor/autoload.php';
    }

    public function testRequestMethods(): void
    {
        $arr = request_methods();
        self::assertIsArray($arr);
    }
}
