<?php

namespace System;

use System\Exception\RouteNotFoundException;

class Application
{
    public function run()
    {
        $router = new Router();
        $response = '';

        try {
            $response = $router->resolve();
        } catch (RouteNotFoundException) {
            http_response_code(404);

            $response = '<h1>Ruta nije pronađena!</h1>';
        } finally {
            if (is_array($response)) {
                $response = json_encode($response);
                header('Content-Type: application/json');
            }

            echo $response;
        }
    }
}