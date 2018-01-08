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

    public function getName(): string
    {
        if ($this->checkData($this->firstName) && $this->checkData($this->lastName)) {

            if ($this->checkData($this->fullName)) {
                return $this->firstName . ' ' . $this->fullName . ' ' . $this->lastName;
            } else {
                return $this->firstName . ' ' . $this->lastName;
            }

        } else {

            if ($this->checkData($this->email)) {
                return $this->email;
            }

        }

        return '';
    }

    protected function checkData($data)
    {
        return isset($data) && !empty($data);
    }

}