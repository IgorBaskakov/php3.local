<?php

namespace App\Commands;

use App\Models\User;
use T4\Console\Command;

class PrintUser extends Command
{

    public function actionDefault()
    {
        $firstUser= new User(['firstName' => 'Игорь', 'lastName' => 'Баскаков', 'email' => 'ibaskakov@mail.com']);
        $reflector = new \ReflectionClass(User::class);

        if ($reflector->isIterateable()) {
            foreach ($firstUser as $key => $value) {
                echo $key . ': ' . $value . "\n";
            }
        }
    }

}