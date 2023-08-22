<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Funzione che restituisce i film
    public function index()
    {
        $movies = config('movies');
        return view('home', compact('movies'));
    }
}
