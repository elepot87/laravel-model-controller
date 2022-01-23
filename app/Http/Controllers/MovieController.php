<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index() {
        // Ottenere tutti i dati
        $movies = Movie::all();
        dump($movies);
        // View
        return view ('movies', compact('movies'));
    }
}
