<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        // Dati
        $films = [
           'Jurassic Park', 'Orgoglio e Pregiudizio', 'IL padrino'
        ];
        // View
        return view ('movies', compact('films'));
    }
}
