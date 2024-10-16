<?php

use App\Videostore\Genre;

require './vendor/autoload.php';

$config = require('./config/database.php');

$connection = new mysqli(username: $config['username'], password: $config['password'], database: $config['database']);
$connection->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);

$connection->begin_transaction();

$statement = $connection->prepare("INSERT INTO zanrovi (naziv) VALUES (?)");
$statement->bind_param('s', $argv[1]);
$statement->execute();

$connection->commit();

// $result = $connection->query('SELECT * FROM zanrovi');

// while ($row = $result->fetch_object(Genre::class)) {
//     echo $row->getName(), "\n";
// }