<?php

namespace App\tests\Components\Math;

use App\Components\MyMailer;
use PHPUnit\Framework\TestCase;

class MyMailerTest extends TestCase
{

    public function testValidateEmail()
    {
        $reflector = new \ReflectionMethod(MyMailer::class, 'validateEmail');
        $reflector->setAccessible(true);

        $mailer = new MyMailer();

        $this->assertSame(true, $reflector->invoke($mailer, 'foo42bar@bar.bar'));
        $this->assertSame(true, $reflector->invoke($mailer, 'foo@bar.baz'));
        $this->assertSame(true, $reflector->invoke($mailer, 'BAZ@BAR.FOO'));

        $this->assertSame(false, $reflector->invoke($mailer, 'foogmail.com'));
        $this->assertSame(false, $reflector->invoke($mailer, 'foo@.com'));
        $this->assertSame(false, $reflector->invoke($mailer, 'bar@com'));
        $this->assertSame(false, $reflector->invoke($mailer, 'baz'));
        $this->assertSame(false, $reflector->invoke($mailer, 'foo@bar.'));
        $this->assertSame(false, $reflector->invoke($mailer, 'foo@bar.42'));
    }
}
