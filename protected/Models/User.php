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

    /**
    * @template "$firstName $lastName"
    */
    public function getFullName()
    {
        $fullName = '';

        $reflector = new \ReflectionMethod(User::class, 'getFullName');
        $comment = $reflector->getDocComment();
        $rows = explode('*', $comment);

        foreach ($rows as $row) {
            $data = trim($row);
            if (substr_count($data, '@template') > 0) {
                $parseData = explode('"', $data);

                if (count($parseData) > 2) {
                    $parseTemplate = explode('$', $parseData[1]);

                    $i = 0;
                    foreach ($parseTemplate as $item) {
                        $val = trim($item);

                        if (!empty($val) && !empty($this->$val)) {
                            if ($i > 0) {
                                $fullName .= ' ';
                            }
                            $fullName .= $this->$val;
                            $i++;
                        }
                    }
                }

            }
        }
        return $fullName;
    }

}
