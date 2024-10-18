<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Test Route
Route::get('test', function () {
    return response()->json(['message' => 'API is working']);
});

// User Registration
Route::post('register', [AuthController::class, 'register']);

// User Login
Route::post('login', [AuthController::class, 'login']);

// User Logout
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');