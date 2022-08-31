<?php

// Minimal Laravel-like application bootstrap
class Application {
    protected $bindings = [];
    protected $singletons = [];
    protected $instances = [];
    
    public function __construct($basePath = null) {
        $this->basePath = $basePath ?: dirname(__DIR__);
    }
    
    public function bind($abstract, $concrete = null) {
        $this->bindings[$abstract] = $concrete ?: $abstract;
    }
    
    public function singleton($abstract, $concrete = null) {
        $this->singletons[$abstract] = $concrete ?: $abstract;
    }
    
    public function make($abstract) {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        
        if (isset($this->singletons[$abstract])) {
            $concrete = $this->singletons[$abstract];
            $instance = is_callable($concrete) ? $concrete($this) : new $concrete();
            $this->instances[$abstract] = $instance;
            return $instance;
        }
        
        if (isset($this->bindings[$abstract])) {
            $concrete = $this->bindings[$abstract];
            return is_callable($concrete) ? $concrete($this) : new $concrete();
        }
        
        return new $abstract();
    }
    
    public function basePath($path = '') {
        return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

$app = new Application(dirname(__DIR__));

// Register core services
$app->singleton('config', function() {
    return [
        'app' => require __DIR__ . '/../config/app.php',
        'database' => require __DIR__ . '/../config/database.php',
    ];
});

return $app;
// Commit 18 - 2022-02-10 15:45:44
// Commit 55 - 2022-05-30 10:30:14
// Commit 18 - 2022-01-11 14:34:06
