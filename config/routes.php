<?php

use App\Controller\MemberController;
use App\Controller\MovieController;
use System\Router;

Router::get('/users', function() {return 'Foo';});
Router::get('/movies', [MovieController::class, 'getAll']);
Router::get('/members', [MemberController::class, 'getAll']);