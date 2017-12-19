<?php

require __DIR__ . '/../vendor/autoload.php';
$config = include __DIR__ . '/../protected/config.php';

echo 'Добро пожаловать на ' . $config['domain'];
//$obj = new \T4\Core\Std();
//$obj->foo = 42;
//echo $obj['foo'];