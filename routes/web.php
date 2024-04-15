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
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

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



