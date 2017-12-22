<?php

namespace App\Models;

use T4\Orm\Model;

class User Extends Model
{

    static protected $schema = [
        'columns' => [
            'name' => ['type' => 'string'],
            'role_id' => ['type' => 'int'],
        ]
    ];

}