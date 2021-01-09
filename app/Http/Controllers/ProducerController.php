<?php

namespace App\Http\Controllers;

use App\Models\Movie_producer;
use App\Models\Movie;
use App\Models\Producer;
use Illuminate\Routing\Controller as BaseController;


class ProducerController extends BaseController
{
    public function getall()
    {
        //$hello = "Hello";
        $producers = Producer::all();
        //return view('layouts/producer/',array('producers'=>$producers),['hello' => $hello]);
        return view('layouts/producer',compact('producers'));
    }
    public function getById($id)
    {
        //Get Current Producer By Id
        $producer = Producer::where('id', $id)
                        ->first();

        //Get Id's of Matching Movies
        $movie_producers = Movie_producer::where('producer_id', $id)
                        ->pluck('movie_id');

        //Link
        $movies = array();
        foreach($movie_producers as $movie_producer)
        {
        $movies[] = Movie::all()->where('id', (int)$movie_producer);
        }
        return view('layouts.partials.producers.current-producer', compact('producer','movie_producers','movies'));
    }
}