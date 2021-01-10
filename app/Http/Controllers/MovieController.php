<?php

namespace App\Http\Controllers;

use App\Models\Movie_genre;
use App\Models\Movie_producer;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Producer;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MovieController extends BaseController
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the name and body columns from the posts table
        $movies = Movie::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('layouts/partials/movies/search', compact('movies'));
    }

    // public function searchByDate(Request $request){
    //     // Get the search value from the request
    //     $search = $request->input('search');

    //     // Search in the title and body columns from the posts table
    //     $performances = Performance::query()
    //         ->where('date', 'LIKE', "%{$search}%")
    //         ->get();

    //     // Return the search view with the resluts compacted
    //     return view('layouts/partials/performances/search', compact('performances'));
    // }

    public function getall()
    {
        $movies = Movie::all();
        return view('layouts/movie',compact('movies'));
    }
    public function getById($id)
    {
        //Get Current Genre By Id
        $movie = Movie::where('id', $id)
                        ->first();


        //////////////Producer

        //Get Id's of Matching Producers
        $movie_producers = Movie_producer::where('movie_id', $id)
                        ->pluck('producer_id');

        //Link
        $producers = array();
        foreach($movie_producers as $movie_producer)
        {
        $producers[] = Producer::all()->where('id', (int)$movie_producer);
        }

        ////////////////////Genre

        //Get Id's of Matching Genres
        $movie_genres = Movie_genre::where('movie_id', $id)
                        ->pluck('genre_id');

        //Link
        $genres = array();
        foreach($movie_genres as $movie_genre)
        {
        $genres[] = Genre::all()->where('id', (int)$movie_genre);
        }

        return view('layouts.partials.movies.current-movie', compact('movie','producers','genres'));
    }
}