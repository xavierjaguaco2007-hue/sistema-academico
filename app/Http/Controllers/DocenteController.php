<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Entrega;

class DocenteController extends Controller
{
    public function dashboard()
    {
        $totalTareas =
            Tarea::count();

        $totalEntregas =
            Entrega::count();

        $pendientes =
            Tarea::count()
            -
            Entrega::count();

        if($pendientes < 0){

            $pendientes = 0;

        }

        $ultimaEntrega =
            Entrega::latest()
            ->first();

        return view(
            'docente.dashboard',

            compact(
                'totalTareas',
                'totalEntregas',
                'pendientes',
                'ultimaEntrega'
            )
        );
    }
}