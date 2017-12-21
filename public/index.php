<?php

require __DIR__ . '/../vendor/autoload.php';
$config = include __DIR__ . '/../protected/config.php';

echo 'Добро пожаловать на ' . $config['domain'];
