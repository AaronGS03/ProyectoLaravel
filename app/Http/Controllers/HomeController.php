<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\DB;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $characters = Character::orderBy(DB::raw('FIELD(rating_oficial, "S+", "S", "S-", "A+", "A-", "B+", "B-", "C+", "C-","D+","D-")'))
            ->orderBy('nombre')
            ->get();

return view('welcome', compact('characters'));
    }
        public function show($id)
    {
        $character = Character::find($id);

        return view('character.show', compact('character'));
    }
}
