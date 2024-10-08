<?php

spl_autoload_register(function(string $class) {
    $prefix = 'App\\';
    $baseDirectory = __DIR__ . '/app/';

    $prefixLength = strlen($prefix);

    if (strncmp($prefix, $class, $prefixLength) !== 0) {
        return;
    }

    $classWithoutPrefix = substr($class, $prefixLength);
    $file = $baseDirectory . str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    if (file_exists($file)) {
        include $file;
    }
});