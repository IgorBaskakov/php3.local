<?php

namespace App\tests\Models\User;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testUser()
    {
        $user = new User([
            'firstName' => 'Игорь',
            'lastName' => 'Баскаков',
            'email' => 'igor.baskak@gmail.com',
        ]);
        $this->assertInstanceOf(User::class, $user);
        $this->assertSame('Игорь Баскаков', $user->getName());

        $user = new User;
        $user->firstName = 'Василий';
        $user->fullName = 'Васильевич';
        $user->lastName = 'Пупкин';
        $user->email = 'vasya@pupkin.com';
        $this->assertSame('Василий Васильевич Пупкин', $user->getName());

        $user = new User([
            'firstName' => 'Иван',
            'email' => 'ivan@ivanov.com',
        ]);
        $this->assertSame('ivan@ivanov.com', $user->getName());

        $user = new User;
        $this->assertSame('', $user->getName());

        $user = new User([
            'lastName' => 'Петров',
            'email' => 'petrov@mail.com',
        ]);
        $this->assertSame('petrov@mail.com', $user->getName());

        $user = new User(['firstName' => 'Альберт']);
        $this->assertSame('', $user->getName());

        $user = new User([
            'firstName' => '',
            'fullName' => '',
            'lastName' => 'Сидоров',
            'email' => '',
        ]);
        $this->assertSame('', $user->getName());

        $user = new User([
            'name' => 'Иван',
            'familia' => 'Иванов',
        ]);
        $this->assertSame('', $user->getName());
    }
}
