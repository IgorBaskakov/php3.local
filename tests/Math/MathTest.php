<?php

namespace App\tests\Components\Math;

use App\Components\Math;
use PHPUnit\Framework\TestCase;

class MathTest
    extends TestCase
{

    public function testSum()
    {
        $this->assertSame(0, Math::sum(0, 0));
        $this->assertSame(1, Math::sum(1, 0));
        $this->assertSame(1, Math::sum(0, 1));
        $this->assertSame(0, Math::sum(-1, 1));
    }

}
