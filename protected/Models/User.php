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

    /*
     * @return string userName or email or empty value
     */
    public function getName(): string
    {
        if (!empty($this->firstName) && !empty($this->lastName)) {
            if (!empty($this->middleName)) {
                return $this->firstName . ' ' . $this->middleName . ' ' . $this->lastName;
            } else {
                return $this->firstName . ' ' . $this->lastName;
            }
        } elseif (!empty($this->email)) {
            return $this->email;
        }

        return '';
    }

}