<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as LaravelDB;

// App\Http\Controllers\SampleController
class SampleController extends Controller
{
    public function helloWorld()
    {
        return 'Hello, world!';

        return 123;

        return [
            'status' => 'success'
        ];

        return view('welcome');
    }

    public function helloLaravel()
    {
        $people = [
            'John',
            'Jill',
            'Jack'
        ];

        //  /resources/views/sample-pages/hello-laravel.blade.php
        //                   sample-pages/hello-laravel
        return view(
            'sample-pages.hello-laravel',       // view
            [                                   // data
                'whom_to_greet' => 'John',
                'people_to_greet' => $people
            ]
        );
        LaravelDB::select('SELECT ...');

        LaravelDB::update('UPDATE ...');
        // return $view_object;
    }
}
