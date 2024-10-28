<?php

namespace System;

use PDO;

abstract class Model
{
    abstract function getTableName(): string;

    abstract function getClassName(): string;

    public function __construct(private PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD))
    {}

    public function findAll()
    {
        $table = $this->getTableName();
        $class = $this->getClassName();

        $statement = $this->connection->query("SELECT * FROM $table");

        $rows = [];

        while ($row = $statement->fetchObject($class)) {
            $rows[] = $row;
        }

        return $rows;
    } 
}