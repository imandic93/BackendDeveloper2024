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

Route::controller(MovieController::class)
    ->prefix('admin')
    ->group(function(){
        Route::any('/movies', 'getMovies');
        Route::get('/movies/{id}', 'getMovie');
});

Route::apiResource('genres', GenreController::class)->parameters([
    'genres' => 'id'
]);
// nested resource
Route::resource('movies.genres', MovieGenreController::class);