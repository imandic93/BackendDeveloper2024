<?php

namespace App\Controller;

use App\Model\Genre;
use System\Controller;

class GenreController extends Controller
{
    public function getAll()
    {
        $genres = (new Genre())->findAll();

        return $this->render('genres', [
            'genres' => $genres
        ]);
    }
}