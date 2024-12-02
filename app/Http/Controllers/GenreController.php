<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::orderBy('name', 'DESC')
            ->get();

        return view('genres.index', [
            'genres' => $genres,
        ]);
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(StoreGenreRequest $request)
    {
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->save();

        return [
            'message' => 'Uspjesno spremljen zanr!'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return Genre::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Genre::destroy($id);
    }
}
