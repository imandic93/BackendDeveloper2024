<?php

use App\Http\Controllers\MovieController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::redirect('/homepage', '/')->name('home');

Route::get('/welcome', function() {
    return redirect()->route('home');
});

Route::controller(MovieController::class)
    ->prefix('admin')
    ->middleware('admin-token:movie')
    ->group(function(){
        Route::any('/movies', 'getMovies');
        Route::get('/movies/{id}', 'getMovie');
});