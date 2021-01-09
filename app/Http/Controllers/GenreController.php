<?php

namespace App\Http\Controllers;

use App\Models\Movie_genre;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Routing\Controller as BaseController;


class GenreController extends BaseController
{
    public function getall()
    {
        //$hello = "Hello";
        $genres = Genre::all();
        //return view('layouts/genre/',array('genres'=>$genres),['hello' => $hello]);
        return view('layouts/genre',compact('genres'));
    }
    public function getById($id)
    {
        //Get Current Genre By Id
        $genre = Genre::where('id', $id)
                        ->first();

        //Get Id's of Matching Movies
        $movie_genres = Movie_genre::where('genre_id', $id)
                        ->pluck('movie_id');

        //Link
        $movies = array();
        foreach($movie_genres as $movie_genre)
        {
        $movies[] = Movie::all()->where('id', (int)$movie_genre);
        }
        return view('layouts.partials.genres.current-genre', compact('genre','movie_genres','movies'));
    }
}