<?php

namespace App\Http\Middleware;

class Authenticate
{
    protected $except = [];
    
    public function handle($request, $next)
    {
        return $next($request);
    }
}
// Commit 14 - 2022-01-18 11:03:49
// Commit 51 - 2022-05-24 12:38:21
// Commit 14 - 2022-01-09 22:03:59
// Commit 51 - 2022-01-25 18:05:13
// Commit 88 - 2022-02-15 19:54:03
