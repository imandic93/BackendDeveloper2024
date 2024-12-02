<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\MovieRepository;
use Illuminate\Support\Facades\Gate;

class MovieController extends Controller
{
    public function __construct(private MovieRepository $movieRepository)
    {}

    public function index()
    {
        Gate::authorize('index', Movie::class);

        return view('movies.index', [
            'movies' => $this->movieRepository->getMovies()
        ]);
    }

    public function show(int $id)
    {
        $movie = Movie::find($id);
        dd($movie->genres->toArray());

        Gate::authorize('show', Movie::class);

        return $this->movieRepository->getMovie($id);
    }
}
