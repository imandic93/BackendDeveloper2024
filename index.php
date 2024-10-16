<?php

require './vendor/autoload.php';

$config = require('./config/database.php');

$connection = new mysqli(username: $config['username'], password: $config['password'], database: $config['database']);

echo $connection->host_info, "\n";