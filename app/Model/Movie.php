<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $guarded =[];
}
