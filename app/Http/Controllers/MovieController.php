<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        // $title = "check";

        $movies = Movie::all();


        return view('home', [
            "movies" => $movies
        ]);	
    }

    public function test() {
        
        //SELECT * FROM `movies` WEHRE `title` LIKE '%adrino%'
        $padrino = Movie::select('movies.title')->get();

        return view('padrino', compact('padrino'));
    }
}
