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
Route::get('/test-database', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is working.';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Error: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/search', function () {
    return view('search');
})->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post(
    '/register',
    [\App\Http\Controllers\UsersController::class, 'register']
)->name('register');

Route::post('/login',
    [\App\Http\Controllers\UsersController::class, 'login']
)->name('login');

Route::post(
    '/contact/submit',
    [\App\Http\Controllers\ContactController::class, 'submit']
)->name('contact-form');

Route::get('/data', function () {
    return view('data');
})->name('data');

Route::get(
    'data/{id}',
    [\App\Http\Controllers\ContactController::class, 'show']
)->name('data-one');

Route::get(
    'data/{id}/delete',
    [\App\Http\Controllers\ContactController::class, 'delete']
)->name('data-one-delete');



