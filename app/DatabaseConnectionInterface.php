<?php

namespace App;

use PDOStatement;

interface DatabaseConnectionInterface
{
    public function query(string $query): PDOStatement;

    public function prepare(string $query): PDOStatement;
}