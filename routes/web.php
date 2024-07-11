<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

#this is placeholder
Route::get('/', function() {
    return view('placeholder');
})->name('placeholder');
#this is placeholder

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
Route::get('/register', [UserController::class, 'register'])->name('register');