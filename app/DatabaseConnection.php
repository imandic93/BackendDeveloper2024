<?php

namespace App;

use PDO;
use PDOStatement;

class DatabaseConnection implements DatabaseConnectionInterface
{
    public function __construct(private PDO $connection = new PDO('mysql:dbname=videoteka', 'ivan', 'dummy'))
    {}

    public function query(string $query): PDOStatement
    {
        return $this->connection->query($query);
    }

    public function prepare(string $query): PDOStatement
    {
        return $this->connection->prepare($query);
    }
}