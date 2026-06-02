@extends('layouts.estudiante')

@section('content')

<div class="mb-8">

    <h1 class="text-4xl font-bold text-gray-800">
        Bienvenido 👋
    </h1>

    <p class="text-gray-500 mt-2">
        Panel académico del estudiante
    </p>

</div>

<!-- CARDS -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <!-- TOTAL TAREAS -->
    <div class="bg-[#F5F3F4] rounded-2xl shadow-lg p-6 border-l-8 border-[#6B7C98]">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500">
                    Total Tareas
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{ $totalTareas }}
                </h2>

            </div>

            <div class="text-5xl">
                📚
            </div>

        </div>

    </div>

    <!-- ENTREGADAS -->
    <div class="bg-[#F5F3F4] rounded-2xl shadow-lg p-6 border-l-8 border-[#AB978C]">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500">
                    Entregadas
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{ $tareasEntregadas }}
                </h2>

            </div>

            <div class="text-5xl">
                ✅
            </div>

        </div>

    </div>

    <!-- PENDIENTES -->
    <div class="bg-[#F5F3F4] rounded-2xl shadow-lg p-6 border-l-8 border-[#7B7F8A]">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-gray-500">
                    Pendientes
                </p>

                <h2 class="text-4xl font-bold mt-2">
                    {{ $tareasPendientes }}
                </h2>

            </div>

            <div class="text-5xl">
                ⏳
            </div>

        </div>

    </div>

    <!-- IA -->
    <div class="bg-[#6B7C98] rounded-2xl shadow-lg p-6 text-white">

        <div class="flex justify-between items-center">

            <div>

                <p>
                    Asistente IA
                </p>

                <h2 class="text-2xl font-bold mt-2">
                    Activo
                </h2>

            </div>

            <div class="text-5xl">
                🤖
            </div>

        </div>

    </div>

</div>

<!-- SECCIÓN INFERIOR -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-6 mt-8">

    <!-- PERFIL -->
    <div class="bg-[#F5F3F4] rounded-2xl shadow-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Información del estudiante
        </h2>

        <div class="space-y-3">

            <p>
                <span class="font-bold">Nombre:</span>
                {{ Auth::user()->name }}
            </p>

            <p>
                <span class="font-bold">Correo:</span>
                {{ Auth::user()->email }}
            </p>

            <p>
                <span class="font-bold">Rol:</span>
                {{ Auth::user()->rol }}
            </p>

        </div>

    </div>

    <!-- ACTIVIDAD -->
    <div class="bg-[#F5F3F4] rounded-2xl shadow-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Actividad reciente
        </h2>

        <div class="space-y-4">

            <div class="border-l-4 border-[#AB978C] pl-4">
                <p class="font-bold">
                    Tareas entregadas
                </p>

                <p class="text-gray-500">
                    {{ $tareasEntregadas }} tareas completadas
                </p>
            </div>

            <div class="border-l-4 border-[#7B7F8A] pl-4">
                <p class="font-bold">
                    Tareas pendientes
                </p>

                <p class="text-gray-500">
                    {{ $tareasPendientes }} tareas por completar
                </p>
            </div>

        </div>

    </div>

</div>

@endsection