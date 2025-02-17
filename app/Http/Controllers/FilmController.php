<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Cast;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function home()
    {
        $films = Film::orderBy('updated_at', 'desc')->simplePaginate(2);
        $genres = Genre::all();
        $filmsPopuler = Film::withCount('reviews')
            ->withAvg('reviews', 'rating')
            ->orderBy('reviews_count', 'desc')
            ->orderBy('reviews_avg_rating', 'desc')
            ->take(5)
            ->get();
        return view('index', compact('films', 'genres', 'filmsPopuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();

        return view('films.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3',
            'description' => 'required|string|max:50000|min:50',
            'release_year' => 'required|integer',
            'genre_id' => 'required|integer',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('photo')->store('images', 'public');

        Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'genre_id' => $request->genre_id,
            'photo' => $path,
        ]);

        return redirect()->route('films.index')
            ->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $film = Film::find($id);

        if (!$film) {
            return redirect()->route('films.index')
                ->with('error', 'Film not found.');
        }
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::find($id);

        if (!$film) {
            return redirect()->route('films.index')
                ->with('error', 'Film not found.');
        }

        $genres = Genre::all();

        return view('films.edit', compact('film', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3',
            'description' => 'required|string|max:50000|min:50',
            'release_year' => 'required|integer',
            'genre_id' => 'required|integer',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $film = Film::find($id);

        if (!$film) {
            return redirect()->route('films.index')
                ->with('error', 'Film not found.');
        }

        $path = $film->photo;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images', 'public');
            if ($film->photo && file_exists(public_path('storage/' . $film->photo))) {
                unlink(public_path('storage/' . $film->photo));
            }
        }

        $film->update([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'genre_id' => $request->genre_id,
            'photo' => $path,
        ]);

        return redirect()->route('films.index')
            ->with('success', 'Film updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $film = Film::find($id);

        if (!$film) {
            return redirect()->route('films.index')
                ->with('error', 'Film not found.');
        }

        if ($film->photo && file_exists(public_path('storage/' . $film->photo))) {
            unlink(public_path('storage/' . $film->photo));
        }

        $film->delete();

        return redirect()->route('films.index')
            ->with('success', 'Film deleted successfully.');
    }
}
