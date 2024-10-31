<?php

use App\Controller\GenreController;
use App\Controller\MemberController;
use System\Router;

Router::get('/users', function() {return 'Foo';});
Router::get('/genres', [GenreController::class, 'getAll']);
Router::get('/members', [MemberController::class, 'getAll']);
Router::get('/', function() {return '';});