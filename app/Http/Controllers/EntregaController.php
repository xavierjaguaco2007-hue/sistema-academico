<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Tarea;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    public function create($id)
    {
        $tarea = Tarea::findOrFail($id);

        return view('estudiante.entregar', compact('tarea'));
    }

    public function store(Request $request)
    {
        $existeEntrega = Entrega::where('tarea_id', $request->tarea_id)
            ->where('user_id', auth()->id())
            ->exists();

        if ($existeEntrega) {

            return redirect()
                ->back()
                ->with('error', 'Ya entregaste esta tarea');
        }

        $archivoPath = null;

        if ($request->hasFile('archivo')) {

            $archivoPath = $request->file('archivo')
                ->store('entregas', 'public');
        }

        Entrega::create([

            'tarea_id' => $request->tarea_id,

            'user_id' => auth()->id(),

            'comentario' => $request->comentario,

            'archivo' => $archivoPath,

        ]);

        return redirect()
            ->route('estudiante.tareas')
            ->with('success', 'Tarea entregada correctamente');
    }
}