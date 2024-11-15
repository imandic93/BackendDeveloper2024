<?php

namespace App\Http\Controllers;

use App\MovieRepository;
use Illuminate\Routing\Controllers\HasMiddleware;

class MovieController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'admin-token:movie',
        ];
    }

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
