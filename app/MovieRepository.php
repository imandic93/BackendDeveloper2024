<?php

namespace App;

use PDO;

class MovieRepository
{
    public function __construct(private DatabaseConnectionInterface $databaseConnection)
    {
        
    }

    public function getMovies()
    {
        $statement = $this->databaseConnection->query('SELECT * FROM filmovi');

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}