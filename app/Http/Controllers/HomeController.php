<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController extends Controller
{
    // Funzione che restituisce i film
    public function index()
    {
        $movie = Movie::first();
        return view('home', compact('movie'));
    }
}
