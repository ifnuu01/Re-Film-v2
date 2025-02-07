<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Cast;
use App\Models\Film;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $casts = Cast::all();
        $films = Film::all();
        return view('actors.create', compact('casts', 'films'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'biography' => 'required|string|max:50000|min:10',
            'cast_id' => 'required|integer',
            'film_id' => 'required|integer',
        ]);

        $path = $request->file('photo')->store('images', 'public');

        Actor::create([
            'name' => $request->name,
            'photo' => $path,
            'biography' => $request->biography,
            'cast_id' => $request->cast_id,
            'film_id' => $request->film_id,
        ]);

        return redirect()->route('actors.index')
            ->with('success', 'Actor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $actor = Actor::find($id);

        if (!$actor) {
            return redirect()->route('actors.index')
                ->with('error', 'Actor not found.');
        }

        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actor = Actor::find($id);
        $casts = Cast::all();
        $films = Film::all();

        if (!$actor) {
            return redirect()->route('actors.index')
                ->with('error', 'Actor not found.');
        }

        return view('actors.edit', compact('actor', 'casts', 'films'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'biography' => 'required|string|max:50000|min:10',
            'cast_id' => 'required|integer',
            'film_id' => 'required|integer',
        ]);

        $actor = Actor::find($id);

        $path = $actor->photo;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images', 'public');
            if ($actor->photo && file_exists(public_path('storage/' . $actor->photo))) {
                unlink(storage_path("app/public/" . $actor->photo));
            }
        }

        $actor->update([
            'name' => $request->name,
            'photo' => $path,
            'biography' => $request->biography,
            'cast_id' => $request->cast_id,
            'film_id' => $request->film_id,
        ]);

        return redirect()->route('actors.index')
            ->with('success', 'Actor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);

        if (!$actor) {
            return redirect()->route('actors.index')
                ->with('error', 'Actor not found.');
        }

        if ($actor->photo && file_exists(public_path('storage/' . $actor->photo))) {
            unlink(public_path('storage/' . $actor->photo));
        }

        $actor->delete();

        return redirect()->route('actors.index')
            ->with('success', 'Actor deleted successfully.');
    }
}
