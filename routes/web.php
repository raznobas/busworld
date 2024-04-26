<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/search',
    [\App\Http\Controllers\RouteController::class, 'index']
)->name('search');

Route::get('/reset-search',
    [\App\Http\Controllers\RouteController::class, 'resetSearch']
)->name('reset-search');

Route::post('/search',
    [\App\Http\Controllers\RouteController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::post('/create-route',
        [\App\Http\Controllers\RouteController::class, 'createRoute']
    )->name('create-route');

    Route::post('/book-route/{route}',
        [\App\Http\Controllers\UserController::class, 'bookRoute']
    )->name('book.route');

    Route::post('/delete-route/{route}',
        [\App\Http\Controllers\UserController::class, 'deleteRoute']
    )->name('delete-route');

    Route::post('/booking-delete/{id}',
        [\App\Http\Controllers\UserController::class, 'bookingDelete']
    )->name('booking-delete');

    Route::get('/profile',
        [\App\Http\Controllers\UserController::class, 'showProfile']
    )->name('profile');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post(
    '/register',
    [\App\Http\Controllers\UserController::class, 'register']
)->name('register');

Route::post('/login',
    [\App\Http\Controllers\UserController::class, 'login']
)->name('login');

Route::post('/logout',
    [\App\Http\Controllers\UserController::class, 'logout']
)->name('logout');


