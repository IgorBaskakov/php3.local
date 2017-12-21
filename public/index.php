<?php

require __DIR__ . '/../vendor/autoload.php';
$config = include __DIR__ . '/../build/production/config.php';

echo 'Добро пожаловать на ' . $config['domain'];
