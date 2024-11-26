<?php

namespace App\Http\Controllers;

use App\MovieRepository;

class MovieController extends Controller
{
    public function __construct(private MovieRepository $movieRepository)
    {}


    public function index()
    {
        return view('movies.index', [
            'movies' => $this->movieRepository->getMovies()
        ]);
    }

    public function getMovie(int $id)
    {
        return $this->movieRepository->getMovie($id);
    }
}
