<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'titulo',
        'reseña',
        'genero',
        'director',
        'actores',
        'año',
        'url_video',
        'imagen'
    ];

}
