<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Funzione che restituisce i film
    public function index()
    {
        $movie = config('movies')[0];
        return view('home', compact('movie'));
    }
}
