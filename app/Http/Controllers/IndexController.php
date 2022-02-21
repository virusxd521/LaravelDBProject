<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $results = DB::select('
            SELECT *
            FROM `movies`
            ORDER BY `rating` DESC
            LIMIT 10
        ');

        // /resources/views/index/index.blade.php
        //                  index/index
        //                  index.index
        return view(
            'index.index',  // 1. view
            [               // 2. data
                'top_movies' => $results
            ]
        );
    }
}
