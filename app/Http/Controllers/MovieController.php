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
            'movies' => Movie::all()->toArray()
        ]);
    }

    public function show(int $id)
    {
        Gate::authorize('show', Movie::class);

        $movie = Movie::findOrFail($id);

        return $movie;
    }
}
