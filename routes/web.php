<?php

use App\MovieRepository;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movies', function(MovieRepository $movieRepositoy) {
    return $movieRepositoy->getMovies();
});