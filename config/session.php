<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),
    'lifetime' => env('SESSION_LIFETIME', 120),
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => storage_path('framework/sessions'),
    'connection' => env('SESSION_CONNECTION'),
    'table' => 'sessions',
    'store' => env('SESSION_STORE'),
    'lottery' => [2, 100],
    'cookie' => env(
        'SESSION_COOKIE',
        strtolower(env('APP_NAME', 'LARAVEL')) . '_session'
    ),
    'path' => '/',
    'domain' => env('SESSION_DOMAIN'),
    'secure' => env('SESSION_SECURE_COOKIES'),
    'http_only' => true,
    'same_site' => 'lax',
];
// Commit 26 - 2022-03-09 12:55:07
// Commit 63 - 2022-06-15 21:51:35
// Commit 26 - 2022-01-13 17:25:07
// Commit 63 - 2022-01-30 17:58:23
// Commit 100 - 2022-02-27 15:52:40
// Commit 137 - 2022-04-04 09:54:25
// Commit 174 - 2022-04-30 13:49:56
