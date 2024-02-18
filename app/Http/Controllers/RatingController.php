<?php

namespace App\Http\Controllers;

use App\Models\Rating;
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
        $ratings = Rating::paginate();

        return view('rating.index', compact('ratings'))
            ->with('i', (request()->input('page', 1) - 1) * $ratings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rating = new Rating();
        return view('rating.create', compact('rating'));
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

        return view('rating.edit', compact('rating'));
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
        request()->validate(Rating::$rules);

        $rating->update($request->all());

        return redirect()->route('ratings.index')
            ->with('success', 'Rating updated successfully');
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
