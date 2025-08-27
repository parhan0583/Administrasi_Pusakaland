<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/login', fn() => view('login'))->name('login');

// Route::post('/login', [AuthController::class, 'login']);
