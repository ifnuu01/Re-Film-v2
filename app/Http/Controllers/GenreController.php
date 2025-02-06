<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create($request->all());

        return redirect()->route('genres.index')
            ->with('success', 'Genre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genres.index')
                ->with('error', 'Genre not found.');
        }

        return view('genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genres.index')
                ->with('error', 'Genre not found.');
        }

        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->all());

        return redirect()->route('genres.index')
            ->with('success', 'Genre updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return redirect()->route('genres.index')
                ->with('error', 'Genre not found.');
        }

        $genre->delete();

        return redirect()->route('genres.index')
            ->with('success', 'Genre deleted successfully.');
    }
}
