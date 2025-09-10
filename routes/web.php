<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PadminController;
use App\Http\Controllers\PadministrasiController;
use App\Http\Controllers\PmarketingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/login', fn() => view('login'))->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::group(['middleware' => ['auth', 'check_role:admin']], function () {
    Route::get('/Padmin', [PadminController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'check_role:administrasi']], function () {
    Route::get('/administrasi/Padministrasi', [PadministrasiController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'check_role:marketing']], function () {
    Route::get('/Pmarketing', [PmarketingController::class, 'index']);
});

Route::get('/logout', [AuthController::class, 'logout']);
