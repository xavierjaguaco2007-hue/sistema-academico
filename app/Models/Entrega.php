<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = [
        'tarea_id',
        'user_id',
        'comentario',
        'archivo',
        'calificacion',
    ];
}