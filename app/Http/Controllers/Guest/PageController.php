<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // assegno tutti i dati del database alla variabile
        $movies = Movie::all();
        // grazie al compact posso visualizzare i dati del database in pagina
        return view('movies', compact('movies'));
    }
}
