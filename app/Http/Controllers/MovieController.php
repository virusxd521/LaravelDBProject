<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MovieController extends Controller
{
    /**
     * a list of movies
     *
     * (top 50)
     */
            
            
    public function index()
    {   
        $table = new Movie;
        $movies = $table::all('*');
        // $movies;
        return view('movie.index', compact('movies'));
    }

    public function insert(Request $request){
        $data = $request;
        $name = $data->all()['name'] ?? 'Daniel';
        $year = $data->all()['year'] ?? '1996';
        $movie = new Movie;
        $movie->name = $name;
        $movie->year = $year;
        $movie->save();
        
        return view('movie.inserting', compact('movie'));
    }
    

    public function show()
    {       
        $movie = DB::table('movies')->limit(50)->get();
        return view('index.deleting', compact('movie'));
    }

    public function delete(Request $request){
        $data = $request;
        $movie = DB::table('movies')->delete($data->id);
        return view('index.dataDelete', compact('data'));
        
        
    }



}
