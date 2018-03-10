<?php

namespace App\Components;


class MyMailer extends \PHPMailer
{

    protected function validateEmail($email)
    {
        $filteredData = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ('boolean' === gettype($filteredData) && false === $filteredData) {
            return false;
        }

        return true;
    }

    public function addAddress($address, $name = '')
    {
        $isValid = $this->validateEmail($address);
        if ($isValid) {
            $status = parent::addAddress($address, $name);
            return $status;
        }

        return false;
    }

}
