<?php

namespace App\Http\Middleware;

class VerifyCsrfToken
{
    protected $except = [];
    
    public function handle($request, $next)
    {
        return $next($request);
    }
}
// Commit 15 - 2022-02-10 09:51:59
// Commit 52 - 2022-05-26 14:56:02
// Commit 15 - 2022-01-09 22:12:50
// Commit 52 - 2022-01-25 20:48:30
// Commit 89 - 2022-02-15 23:52:03
// Commit 126 - 2022-03-27 17:16:15
