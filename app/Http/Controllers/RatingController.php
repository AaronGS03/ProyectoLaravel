<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Character;
use Illuminate\Http\Request;

/**
 * Class RatingController
 * @package App\Http\Controllers
 */
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings= Rating::all();
        // Obtener todos los personajes y sus valoraciones de "divertido" ordenados descendentemente
        $charactersByFunRating = Character::with(['ratings' => function ($query) {
            $query->orderBy('divertido', 'desc');
        }])->get();
    
        // Obtener todos los personajes y sus valoraciones de "no gusta" ordenados descendentemente
        $charactersByNoLikeRating = Character::with(['ratings' => function ($query) {
            $query->orderBy('no_gusta', 'desc');
        }])->get();
    
        return view('rating.index', compact('ratings','charactersByFunRating', 'charactersByNoLikeRating'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rating = new Rating();
        $character = Character::pluck('nombre','id');
        
        return view('rating.create', compact('rating','character'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rating::$rules);

        $rating = Rating::create($request->all());

        return redirect()->route('ratings.index')
            ->with('success', 'Rating created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rating = Rating::find($id);

        return view('rating.show', compact('rating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rating = Rating::find($id);
        $character = Character::pluck('nombre','id');

        return view('rating.edit', compact('rating','character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        try {
        request()->validate(Rating::$rules);

        $rating->update($request->all());

        return redirect()->route('ratings.index')
            ->with('success', 'Rating updated successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()
                ->with('error', 'Error: Data truncated for column. Please enter valid data.');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rating = Rating::find($id)->delete();

        return redirect()->route('ratings.index')
            ->with('success', 'Rating deleted successfully');
    }
}
