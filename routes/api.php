<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', function (Request $request) {
    return $request->tasks();
})->middleware('auth:sanctum');
