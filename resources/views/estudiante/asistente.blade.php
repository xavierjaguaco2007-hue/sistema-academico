@extends('layouts.estudiante')

@section('content')

<h1 class="text-4xl font-bold text-[#5E5653] mb-6">
    🤖 Asistente Académico IA
</h1>

<form method="POST" action="{{ route('ia.preguntar') }}">
    @csrf

    <textarea
        name="pregunta"
        rows="5"
        class="w-full border rounded-2xl p-4"
        placeholder="Escribe tu pregunta..."
    ></textarea>

    <button
        class="mt-4 bg-[#6B7C98] text-white px-6 py-3 rounded-2xl">

        Preguntar

    </button>
</form>

@if(session('respuesta'))

    <div class="mt-8 bg-white p-6 rounded-2xl shadow">

        <h2 class="font-bold text-xl mb-3">
            Respuesta IA
        </h2>

        <p>
            {{ session('respuesta') }}
        </p>

    </div>

@endif

@endsection