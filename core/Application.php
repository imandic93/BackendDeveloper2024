<?php

namespace System;

use System\Exception\RouteNotFoundException;
use Throwable;

class Application
{
    public function run()
    {
        $databaseConfig = require CONFIG . '/database.php';

        define('DB_DSN', $databaseConfig['dsn']);
        define('DB_USERNAME', $databaseConfig['username']);
        define('DB_PASSWORD', $databaseConfig['password']);

        $router = new Router();
        $response = '';

        try {
            $response = $router->resolve();
        } catch (RouteNotFoundException) {
            http_response_code(404);

            $response = '<h1>Ruta nije pronađena!</h1>';
        } catch (Throwable) {
            http_response_code(500);

            $response = '<h1>Dogodila se greška!</h1>';
        }

        if (is_array($response)) {
            $response = json_encode($response);
            header('Content-Type: application/json');
        }

        echo $response;
    }
}