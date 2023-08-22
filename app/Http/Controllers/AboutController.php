<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Restituisce section about
    public function index()
    {
        return view('about');
    }
}
