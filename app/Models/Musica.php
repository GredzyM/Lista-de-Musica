<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = [
        'titulo',
        'artista',
        'genero',
        'album',
        'duracion',
        'anio',
        'imagen'
    ];
}
