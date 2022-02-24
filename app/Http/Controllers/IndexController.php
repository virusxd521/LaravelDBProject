<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Movie;


class IndexController extends Controller
{
    


    public function index()
    {   
        
        $results = ['sss', 'dsdsd'];
        return view('index.index', compact('results'));
    }
}
