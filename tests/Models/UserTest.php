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
        $this->assertSame('Игорь Баскаков', $user->getFullName());

        $user = new User;
        $user->firstName = 'Василий';
        $user->middleName = 'Васильевич';
        $user->lastName = 'Пупкин';
        $user->email = 'vasya@pupkin.com';
        $this->assertSame('Василий Пупкин', $user->getFullName());

        $user = new User([
            'firstName' => 'Иван',
            'email' => 'ivan@ivanov.com',
        ]);
        $this->assertSame('Иван', $user->getFullName());

        $user = new User;
        $this->assertSame('', $user->getFullName());

        $user = new User([
            'lastName' => 'Петров',
            'email' => 'petrov@mail.com',
        ]);
        $this->assertSame('Петров', $user->getFullName());

        $user = new User(['firstName' => 'Альберт']);
        $this->assertSame('Альберт', $user->getFullName());

        $user = new User([
            'firstName' => '',
            'middleName' => '',
            'lastName' => 'Сидоров',
            'email' => '',
        ]);
        $this->assertSame('Сидоров', $user->getFullName());

        $user = new User([
            'name' => 'Иван',
            'familia' => 'Иванов',
        ]);
        $this->assertSame('', $user->getFullName());
    }
}
