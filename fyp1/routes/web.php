<?php

use Illuminate\Support\Facades\Route;

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/practice', [App\Http\Controllers\MainController::class, 'practice']);
Route::get('/header', [App\Http\Controllers\MainController::class, 'header']);
Route::get('/home', [App\Http\Controllers\MainController::class, 'home']);
Route::post('/signup', [App\Http\Controllers\MainController::class, 'signup'])->name('signup');
Route::post('/login', [App\Http\Controllers\MainController::class, 'login'])->name('login');
// Route::post('/signupRecord', [App\Http\Controllers\MainController::class, 'signup']);
// Route::post('/loginRecord', [App\Http\Controllers\MainController::class, 'log']);
Route::get('/carmachanic', [App\Http\Controllers\MainController::class, 'carmachanic']);
Route::get('/babysitter', [App\Http\Controllers\MainController::class, 'babysitter']);
Route::get('/beautition', [App\Http\Controllers\MainController::class, 'beautition']);
Route::get('/cleaner', [App\Http\Controllers\MainController::class, 'cleaner']);
Route::get('/electrition', [App\Http\Controllers\MainController::class, 'electrition']);
Route::get('/plumber', [App\Http\Controllers\MainController::class, 'plumber']);
// Route::get('/security', [App\Http\Controllers\MainController::class, 'security']);
Route::get('/tailor', [App\Http\Controllers\MainController::class, 'tailor']);
Route::get('/homeshiffting', [App\Http\Controllers\MainController::class, 'homeshiffting']);
Route::get('/services', [App\Http\Controllers\MainController::class, 'services']);
Route::get('/About', [App\Http\Controllers\MainController::class, 'About']);
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact']);

Route::get('/carpenter', [App\Http\Controllers\MainController::class, 'carpenter']);
Route::get('/driver', [App\Http\Controllers\MainController::class, 'driver']);
Route::get('/cooking', [App\Http\Controllers\MainController::class, 'cooking']);
Route::get('/lundary', [App\Http\Controllers\MainController::class, 'lundary']);
Route::get('/painter', [App\Http\Controllers\MainController::class, 'painter']);

Route::get('/footer', [App\Http\Controllers\MainController::class, 'footer']);


