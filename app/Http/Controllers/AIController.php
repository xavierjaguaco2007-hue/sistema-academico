<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function index()
    {
        return view('estudiante.asistente');
    }

    public function preguntar(Request $request)
    {
        $respuesta = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('GROQ_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post(
            'https://api.groq.com/openai/v1/chat/completions',
            [
                'model' => 'llama-3.3-70b-versatile',
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $request->pregunta,
                    ]
                ]
            ]
        );

        $texto = $respuesta['choices'][0]['message']['content']
            ?? 'No se obtuvo respuesta';

        return redirect()
            ->back()
            ->with('respuesta', $texto);
    }
}