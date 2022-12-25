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
// Commit 59 - 2022-01-28 19:15:29
// Commit 96 - 2022-02-24 19:50:26
// Commit 133 - 2022-03-30 18:57:23
