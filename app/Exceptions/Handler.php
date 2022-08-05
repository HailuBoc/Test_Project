<?php

namespace App\Exceptions;

class Handler
{
    protected $dontReport = [];
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];
    
    public function report(\Exception $exception)
    {
        //
    }
    
    public function render($request, \Exception $exception)
    {
        return [
            'error' => $exception->getMessage(),
            'status' => 500
        ];
    }
}
// Commit 11 - 2022-01-13 11:18:54
// Commit 48 - 2022-05-16 11:45:21
// Commit 11 - 2022-01-09 15:00:25
