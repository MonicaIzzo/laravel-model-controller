<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMovie extends Controller
{
        // Funzione che mi restituisce i movie
    public function index()
        $movies = [];

    return view('home', compact('movies'));
}
