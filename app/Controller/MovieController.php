<?php

namespace App\Controller;

use App\Model\Genre;

class MovieController
{
    public function getAll()
    {
        return (new Genre())->findAll();
    }
}