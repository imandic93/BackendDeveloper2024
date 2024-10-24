<?php

namespace System;

use System\Exception\RouteNotFoundException;

class Application
{
    public function run()
    {
        $router = new Router();

        try {
            echo $router->resolve();
        } catch (RouteNotFoundException) {
            http_response_code(404);

            echo '<h1>Ruta nije pronađena!</h1>';
        }
    }
}