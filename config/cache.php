<?php

return [
    'default' => env('CACHE_DRIVER', 'file'),
    'stores' => [
        'array' => [
            'driver' => 'array',
        ],
        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
        ],
    ],
    'prefix' => env('CACHE_PREFIX', 'laravel_cache_'),
];
// Commit 20 - 2022-02-23 10:11:58
// Commit 57 - 2022-05-30 13:24:48
// Commit 20 - 2022-01-11 16:18:09
// Commit 57 - 2022-01-28 15:44:04
// Commit 94 - 2022-02-24 18:02:04
// Commit 131 - 2022-03-29 20:53:01
