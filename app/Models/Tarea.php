<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_entrega',
        'user_id',
    ];

        public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }

}

