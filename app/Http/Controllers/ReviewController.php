<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_film)
    {
        $request->validate([
            'content' => 'required|string|max:255|min:50',
            'rating' => 'required|integer|min:1|max:5',
            'film_id' => 'required|integer'
        ]);

        Review::create([
            'content' => $request->content,
            'rating' => $request->rating,
            'film_id' => $id_film,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('films.show', $id_film);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
