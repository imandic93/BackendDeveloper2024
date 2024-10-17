<?php

$config = require('./config/database.php');

try {
    $connection = new PDO(
        "mysql:dbname={$config['database']}",
        $config['username'], 
        $config['password']
    );
} catch (PDOException) {
    die('Could not connect to database!');
}
