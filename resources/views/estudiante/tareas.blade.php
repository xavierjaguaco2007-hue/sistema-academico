@extends('layouts.estudiante')

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold text-[#5E5653]">
        Tareas Académicas
    </h1>

    <p class="text-[#7B7F8A] mt-2">
        Consulta y entrega tus actividades académicas
    </p>

</div>

<div class="flex flex-wrap gap-6">

@foreach($tareas as $tarea)

    <div class="bg-[#F5F3F4] rounded-3xl shadow-xl p-8 border-l-8 border-[#6B7C98] hover:scale-[1.01] transition duration-300">

        <!-- HEADER -->
        <div class="flex justify-between items-start">

            <div>

                <h2 class="text-3xl font-bold text-[#5E5653]">
                    {{ $tarea->titulo }}
                </h2>

                <p class="text-[#7B7F8A] mt-3 leading-relaxed">
                    {{ $tarea->descripcion }}
                </p>

            </div>

            <div class="text-5xl">
                📚
            </div>

        </div>

        <!-- FECHA -->
        <div class="mt-6 bg-[#E9E6E7] rounded-2xl p-4">

            <p class="font-bold text-[#5E5653]">
                📅 Fecha de entrega
            </p>

            <p class="text-[#7B7F8A] mt-1">
                {{ $tarea->fecha_entrega }}
            </p>

        </div>

        <!-- BOTÓN -->
        <div class="mt-6">

            @if(in_array($tarea->id, $entregas))

                <a href="#"
                   class="bg-[#AB978C] hover:bg-[#6B7C98]
                          text-white px-6 py-3 rounded-2xl
                          inline-block transition duration-300 shadow-lg">

                    ✅ Ver entrega

                </a>

            @else

                <a href="{{ route('entregas.create', $tarea->id) }}"
                   class="bg-[#6B7C98] hover:bg-[#7B7F8A]
                          text-white px-6 py-3 rounded-2xl
                          inline-block transition duration-300 shadow-lg">

                    📤 Entregar tarea

                </a>

            @endif

        </div>

    </div>

@endforeach

</div>

@endsection