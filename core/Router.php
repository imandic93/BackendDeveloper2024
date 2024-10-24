<?php

namespace System;

use System\Exception\RouteNotFoundException;

class Router
{
    private static array $routes = [];

    public static function get(string $route, callable $callback)
    {
        self::$routes['get'][$route] = $callback;
    }

    public function resolve()
    {
        require CONFIG . '/routes.php';
        $requestedRoute = $_SERVER['REQUEST_URI'];
        $requestedMethod = strtolower($_SERVER['REQUEST_METHOD']);

        $callback = self::$routes[$requestedMethod][$requestedRoute] ?? false;

        if ($callback === false) {
            throw new RouteNotFoundException();
        }

        return $callback();
    }
}