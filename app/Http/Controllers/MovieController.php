<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * a list of movies
     *
     * (top 50)
     */
    public function index()
    {
        // SELECT *
        // FROM `movies`
        // WHERE `movie_type_id` = 1
        //   AND `votes_nr` > 5000
        // ORDER BY `rating` DESC
        // LIMIT 50

        /*
        $query_builder = Movie::query(); // FROM `movies`
        $query_builder->where('votes_nr', '>', 5000); // AND `votes_nr` > 5000
        $query_builder->orderBy('rating', 'desc'); // ORDER BY `rating` DESC
        $query_builder->limit(50); // LIMIT 50
        $query_builder->where('movie_type_id', 1); // WHERE `movie_type_id` = 1

        $results = $query_builder->get();
        */


        $movies = Movie::limit(50) // LIMIT 50
            ->where('votes_nr', '>', 5000) // AND `votes_nr` > 5000
            ->orderBy('rating', 'desc') // ORDER BY `rating` DESC
            ->where('movie_type_id', 1) // WHERE `movie_type_id` = 1
            ->get();

        return view('movie.index', compact('movies'));
        //                       ['movies' => $movies]
    }
}
