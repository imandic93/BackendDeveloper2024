<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::redirect('/homepage', '/')->name('home');

Route::get('/welcome', function() {
    return redirect()->route('home');
});


Route::controller(MovieController::class)->prefix('admin')->group(function(){
    Route::any('/movies', 'getMovies');
    Route::get('/movies/{id}', 'getMovie');
});