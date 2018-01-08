<?php

return [
    'domain' => '{{domain}}',
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => '{{db.user}}',
            'password' => '{{db.password}}',
            'dbname' => 'php3'
        ]
    ],
    'email' => [
        'host' => 'smtp.gmail.com',
        'username' => '{{email.user}}',
        'password' => '{{email.password}}',
        'SMTPSecure' => 'tls',
        'port' => 587
    ]
];