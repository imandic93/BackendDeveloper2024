<?php

use System\Application;

define('ROOT', realpath(__DIR__ . '/../'));

require ROOT . '/vendor/autoload.php';

$app = new Application();
$app->run();