<?php

return [
    'default' => env('LOG_CHANNEL', 'stack'),
    'deprecations' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],
        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],
        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],
        'null' => [
            'driver' => 'null',
        ],
    ],
];
// Commit 23 - 2022-02-23 21:14:10
// Commit 60 - 2022-06-15 09:12:27
// Commit 23 - 2022-01-11 23:12:54
// Commit 60 - 2022-01-30 12:05:22
// Commit 97 - 2022-02-24 20:02:27
// Commit 134 - 2022-04-01 21:47:35
// Commit 171 - 2022-04-28 22:31:35
