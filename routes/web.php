<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('authorization');
})->middleware('guest')->name('login');

Route::get('profile/edit', function () {
    return view('edit');
});

Route::get('/news', [NewsController::class, 'allData'])->name('news');
Route::get('/software', [NewsController::class, 'software'])->name('software');
Route::get('/web', [NewsController::class, 'web'])->name('web');
Route::get('/uiux', [NewsController::class, 'uiux'])->name('uiux');
Route::get('/cybersecurity', [NewsController::class, 'cybersecurity'])->name('cybersecurity');
Route::get('/popular', [NewsController::class, 'popular'])->name('popular');

Route::get('/news/{id}', [NewsController::class, 'show']);

Route::get('/registration', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/registration', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/create', [NewsController::class, 'create'])->middleware('auth')->name('create');
Route::post('/create', [NewsController::class, 'store'])->middleware('auth');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->middleware('auth')->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('edit');

Route::post('/profile/edit/changeData', [ProfileController::class, 'changeData'])->name('changeData');
Route::post('/profile/edit/changeImage', [ProfileController::class, 'changeImage'])->name('changeImage');
Route::post('/profile/edit', [ProfileController::class, 'changePassword'])->name('changePassword');

Route::post('/like', [FeedbackController::class, 'like'])->name('like');
Route::post('/comment', [FeedbackController::class, 'comment'])->name('comment');
Route::post('/answer', [FeedbackController::class, 'answer'])->name('answer');
Route::post('/delete', [FeedbackController::class, 'delete'])->name('delete');