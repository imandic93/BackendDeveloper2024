<?php

use App\Videostore\Genre;

require './vendor/autoload.php';

$config = require('./config/database.php');

$connection = new PDO(
    "mysql:dbname={$config['database']};host=localhost",
    $config['username'], 
    $config['password']
);

var_dump($connection->getAvailableDrivers());

// $connection->begin_transaction();

// $statement = $connection->prepare("INSERT INTO zanrovi (naziv) VALUES (?)");
// $statement->bind_param('s', $argv[1]);
// $statement->execute();

// $connection->commit();

// $result = $connection->query('SELECT * FROM zanrovi');

// while ($row = $result->fetch_object(Genre::class)) {
//     echo $row->getName(), "\n";
// }