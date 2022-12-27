<?php

// Minimal autoloader for Laravel-like structure
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../app/';
    
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $relative_class = substr($class, strlen($prefix));
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        
        if (file_exists($file)) {
            require $file;
        }
    }
});

// Load environment variables
if (file_exists(__DIR__ . '/../.env')) {
    $lines = file(__DIR__ . '/../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}
// Commit 37 - 2022-04-12 22:37:52
// Commit 37 - 2022-01-17 21:12:55
// Commit 74 - 2022-02-04 17:33:27
// Commit 111 - 2022-03-06 18:26:17
// Commit 148 - 2022-04-17 18:59:35
