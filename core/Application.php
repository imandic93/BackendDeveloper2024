<?php

namespace System;

use Symfony\Component\Dotenv\Dotenv;
use System\Exception\RouteNotFoundException;
use Throwable;

class Application
{
    public function run()
    {
        $dotenv = new Dotenv();
        $dotenv->loadEnv(ROOT . '/.env');

        define('DB_DSN', $_ENV['DB_DSN']);
        define('DB_USERNAME', $_ENV['DB_USERNAME']);
        define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

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