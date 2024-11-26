<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieGenreController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::redirect('/homepage', '/')->name('home');

Route::get('/welcome', function() {
    return redirect()->route('home');
});

Route::resources([
    'genres' => GenreController::class,
    'movies' => MovieController::class,
]);
// nested resource
Route::resource('movies.genres', MovieGenreController::class);