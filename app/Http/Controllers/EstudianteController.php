<?php

namespace App\Http\Controllers;

use App\Models\Tarea;

class EstudianteController extends Controller
{
    public function dashboard()
    {
        $totalTareas = \App\Models\Tarea::count();

            $tareasEntregadas = \App\Models\Entrega::where(
                'user_id',
                auth()->id()
            )
            ->distinct('tarea_id')
            ->count('tarea_id');

        $tareasPendientes = max(0, $totalTareas - $tareasEntregadas);

        return view('estudiante.dashboard', compact(
            'totalTareas',
            'tareasEntregadas',
            'tareasPendientes'
        ));
    }

    public function tareas()
    {
        $tareas = \App\Models\Tarea::all();

        $entregas = \App\Models\Entrega::where('user_id', auth()->id())
            ->pluck('tarea_id')
            ->toArray();

        return view('estudiante.tareas', compact('tareas', 'entregas'));
    }
}