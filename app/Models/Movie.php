<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MovieType;
use App\Models\Genre;

class Movie extends Model
{
    
    use HasFactory;
    protected $table = 'movies';    
    public $timestamps = false;


    public function type()
    {
        return $this->belongsTo(MovieType::class);
    }



    public function movie(){
        
    }



    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }


    public function getFormattedRating()
    {
        return number_format($this->rating, 1);
    }
}
