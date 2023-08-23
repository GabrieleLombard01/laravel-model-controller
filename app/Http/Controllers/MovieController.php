<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Restituisce la lista dei film
    public function index()
    {
        $movies = config('movies');
        return view('movies.index', compact('movies'));
    }
}
