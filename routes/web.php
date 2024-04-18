<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reg', [RegisterController::class, 'create'])->middleware('guest')->name('reg');
Route::post('/reg', [RegisterController::class, 'store']);

Route::get('/auth', [LoginController::class, 'create'])->middleware('guest')->name('auth');
Route::post('/auth', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/success', function () {
    return view('success');
});