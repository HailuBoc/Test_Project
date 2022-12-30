<?php

return [
    'default' => env('MAIL_MAILER', 'log'),
    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
            'port' => env('MAIL_PORT', 465),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
        ],
        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],
        'array' => [
            'transport' => 'array',
        ],
    ],
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Laravel'),
    ],
];
// Commit 24 - 2022-03-02 12:24:03
// Commit 61 - 2022-06-15 14:33:10
// Commit 24 - 2022-01-13 08:12:49
// Commit 61 - 2022-01-30 14:05:21
// Commit 98 - 2022-02-24 20:44:56
// Commit 135 - 2022-04-03 13:11:59
