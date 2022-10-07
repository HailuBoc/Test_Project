<?php

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Simple router
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

// Route handling
$routes = [
    'GET' => [
        '/' => function() {
            return view('welcome');
        },
        '/api/user' => function() {
            return json_response(['message' => 'User endpoint']);
        },
    ]
];

// Helper functions
function view($name, $data = []) {
    $file = __DIR__ . '/../resources/views/' . $name . '.php';
    if (file_exists($file)) {
        extract($data);
        ob_start();
        require $file;
        return ob_get_clean();
    }
    return "View not found: $name";
}

function json_response($data, $status = 200) {
    header('Content-Type: application/json');
    http_response_code($status);
    return json_encode($data);
}

// Match route
$matched = false;
if (isset($routes[$request_method][$request_uri])) {
    $handler = $routes[$request_method][$request_uri];
    echo $handler();
    $matched = true;
}

if (!$matched) {
    http_response_code(404);
    echo json_response(['error' => 'Route not found'], 404);
}
// Commit 28 - 2022-03-09 22:37:00
// Commit 65 - 2022-06-26 11:23:33
// Commit 28 - 2022-01-13 23:09:20
