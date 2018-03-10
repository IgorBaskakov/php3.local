<?php

namespace App\Commands;


use App\Models\User;
use T4\Console\Command;

class Hello
    extends Command
{

    public function actionDefault()
    {
        $usr = new User();
        $usr->firstName = 'Игорь';
        $usr->lastName = 'Баскаков';
        $usr->middleName = 'Николаевич';

        var_dump($usr->getFullName());

    }
}