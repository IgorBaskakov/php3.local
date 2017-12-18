<?php

require __DIR__ . '/../vendor/autoload.php';

$obj = new \T4\Core\Std();
$obj->foo = 42;
echo $obj['foo'];