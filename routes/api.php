<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Commit 33 - 2022-04-11 15:50:53
// Commit 33 - 2022-01-17 09:54:02
// Commit 70 - 2022-02-02 13:18:19
// Commit 107 - 2022-03-03 10:03:04
// Commit 144 - 2022-04-17 09:10:15
