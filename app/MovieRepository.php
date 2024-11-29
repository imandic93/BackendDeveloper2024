<?php

namespace App;

use App\Models\Movie;
use PDO;

class MovieRepository
{
    public function getMovies()
    {
        return Movie::all()->toArray();
    }

    public function getMovie(int $id)
    {

    }
}