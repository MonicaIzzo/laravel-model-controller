<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ControllerMovie extends Controller
{
    // Funzione che mi restituisce i movie
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
