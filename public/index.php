<?php

use System\Application;

define('ROOT', realpath(__DIR__ . '/../'));
define('CONFIG', ROOT . '/config');

require ROOT . '/vendor/autoload.php';

$app = new Application();
$app->run();