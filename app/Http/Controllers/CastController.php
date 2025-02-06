<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('casts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'biography' => 'required|string|max:255|min:50',
            'birth_date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('photo')->store('images', 'public');

        Cast::create([
            'name' => $request->name,
            'biography' => $request->biography,
            'birth_date' => $request->birth_date,
            'photo' => $path,
        ]);

        return redirect()->route('casts.index')
            ->with('success', 'Cast created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cast = Cast::find($id);

        if (!$cast) {
            return redirect()->route('casts.index')
                ->with('error', 'Cast not found.');
        }

        return view('casts.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cast = Cast::find($id);

        if (!$cast) {
            return redirect()->route('casts.index')
                ->with('error', 'Cast not found.');
        }

        return view('casts.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:3',
            'biography' => 'required|string|max:255|min:50',
            'birth_date' => 'required|date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $cast = Cast::find($id);

        if (!$cast) {
            return redirect()->route('casts.index')
                ->with('error', 'Cast not found.');
        }

        $path = $cast->photo;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('images', 'public');
            if ($cast->photo && file_exists(public_path('storage/' . $cast->photo))) {
                unlink(public_path('storage/' . $cast->photo));
            }
        }

        $cast->update([
            'name' => $request->name,
            'biography' => $request->biography,
            'birth_date' => $request->birth_date,
            'photo' => $path,
        ]);

        return redirect()->route('casts.index')
            ->with('success', 'Cast updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cast = Cast::find($id);

        if (!$cast) {
            return redirect()->route('casts.index')
                ->with('error', 'Cast not found.');
        }

        if ($cast->photo && file_exists(public_path('storage/' . $cast->photo))) {
            unlink(public_path('storage/' . $cast->photo));
        }

        $cast->delete();

        return redirect()->route('casts.index')
            ->with('success', 'Cast deleted successfully.');
    }
}
