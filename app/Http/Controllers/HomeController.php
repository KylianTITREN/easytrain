<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercices;
use App\Muscles;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    public function accueil()
    {
        return view('accueil');
    }

    public function program()
    {
        return view('program');
    }

    public function muscles()
    {
        $muscles = Muscles::all();
        if($muscles == false) abort(404);
            return view('muscles', ['muscles'=>$muscles]);
    }

    public function exercices()
    {
        $exercices = Exercices::all();
        if($exercices == false) abort(404);
            return view('exercices', ['exercices'=>$exercices]);
    }
}
