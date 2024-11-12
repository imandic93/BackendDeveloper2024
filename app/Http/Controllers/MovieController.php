<?php

namespace App\Http\Controllers;

use App\MovieRepository;

class MovieController extends Controller
{
    public function __construct(private MovieRepository $movieRepository)
    {}


    public function getMovies()
    {
        return $this->movieRepository->getMovies();
    }

    public function getMovie(int $id)
    {
        return $this->movieRepository->getMovie($id);
    }
}
