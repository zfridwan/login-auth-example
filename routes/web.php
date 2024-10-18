<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/register', 'auth.register')->name('register');
Route::view('/', 'auth.login')->name('login');
