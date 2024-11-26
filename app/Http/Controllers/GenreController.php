<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('genres.index', [
            'genres' => ['Horor', 'Drama', 'Komedija'],
        ]);
    }

    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        dd($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->action([GenreController::class, 'index']);
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
        //
    }
}
