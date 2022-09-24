<?php

return [
    'default' => env('FILESYSTEM_DISK', 'local'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'private',
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
    ],
];
// Commit 22 - 2022-02-23 12:01:28
// Commit 59 - 2022-05-30 19:24:08
// Commit 22 - 2022-01-11 18:29:52
