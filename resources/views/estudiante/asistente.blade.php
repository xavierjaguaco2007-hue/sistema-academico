@extends('layouts.estudiante')

@php
use Illuminate\Support\Str;
@endphp

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold text-[#5E5653]">
        🤖 Asistente Académico IA
    </h1>

    <p class="text-[#7B7F8A] mt-2">
        Haz preguntas sobre tareas, programación, bases de datos y temas académicos.
    </p>

</div>

<div class="bg-white rounded-3xl shadow-xl p-6 border border-[#D8D4D5]">

    <form method="POST" action="{{ route('ia.preguntar') }}">
        @csrf

        <textarea
            name="pregunta"
            rows="4"
            class="w-full rounded-2xl border border-[#D8D4D5] p-4 focus:outline-none focus:ring-2 focus:ring-[#6B7C98]"
            placeholder="Escribe tu pregunta..."
        ></textarea>

        <button
            type="submit"
            class="mt-4 bg-[#6B7C98] hover:bg-[#5A6A84] text-white px-6 py-3 rounded-2xl transition">

            Preguntar

        </button>

    </form>

</div>

@if(session('respuesta'))

    <div class="mt-8 bg-white rounded-3xl shadow-xl border border-[#D8D4D5]">

        <div class="p-5 border-b border-[#E5E5E5]">

            <h2 class="text-2xl font-bold text-[#5E5653]">
                🤖 Respuesta IA
            </h2>

        </div>

        <div
            class="p-6 overflow-y-auto overflow-x-auto max-h-[650px]">

            <div class="prose prose-slate max-w-none">

                {!! Str::markdown(session('respuesta')) !!}

            </div>

        </div>

    </div>

@endif

@endsection