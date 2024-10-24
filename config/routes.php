<?php

use App\Controller\MovieController;
use System\Router;

Router::get('/users', function() {return 'Foo';});
Router::get('/movies', [MovieController::class, 'getAll']);