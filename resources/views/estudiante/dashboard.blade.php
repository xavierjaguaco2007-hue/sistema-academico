@extends('layouts.estudiante')

@section('content')

<!-- HEADER -->

<div class="mb-10">

    <p class="text-[#7B7F8A] uppercase tracking-[6px] text-sm">
        Dashboard
    </p>

    <h1
class="
text-6xl
font-black
leading-none
text-[#5E5653]
"

        Bienvenido,
        {{ Auth::user()->name }}

    </h1>

    <p class="text-[#7B7F8A] mt-3 text-lg">

        Gestiona tu actividad académica.

    </p>

</div>

<!-- MÉTRICAS -->
<!-- MÉTRICAS -->

<div
class="
grid
grid-cols-2
xl:grid-cols-4
gap-5
">

<!-- TOTAL -->

<div class="card p-6">

<div class="flex items-start justify-between">

<div>

<p class="text-[#7B7F8A] text-sm">

Total tareas

</p>

<h2
class="
text-5xl
font-black
text-[#5E5653]
mt-3">

{{ $totalTareas }}

</h2>

</div>

<div class="text-4xl">

📚

</div>

</div>

</div>

<!-- ENTREGADAS -->

<div class="card p-6">

<div class="flex justify-between">

<div>

<p class="text-[#7B7F8A] text-sm">

Entregadas

</p>

<h2
class="
text-5xl
font-black
text-green-600
mt-3">

{{ $tareasEntregadas }}

</h2>

</div>

<div class="text-4xl">

✅

</div>

</div>

</div>

<!-- PENDIENTES -->

<div class="card p-6">

<div class="flex justify-between">

<div>

<p class="text-[#7B7F8A] text-sm">

Pendientes

</p>

<h2
class="
text-5xl
font-black
text-[#AB978C]
mt-3">

{{ $tareasPendientes }}

</h2>

</div>

<div class="text-4xl">

⏳

</div>

</div>

</div>

<!-- IA -->

<a
href="{{ route('estudiante.asistente') }}"

class="
rounded-[28px]
bg-gradient-to-br
from-[#6B7C98]
to-[#556581]
text-white
p-6
shadow-xl
hover:scale-[1.02]
transition">

<div class="flex justify-between">

<div>

<p class="opacity-80">

Asistente

</p>

<h2
class="
text-3xl
font-black
mt-3">

IA

</h2>

</div>

<div class="text-4xl">

🤖

</div>

</div>

</a>

</div>

<!-- BLOQUES -->

<div class="grid xl:grid-cols-[1.4fr_.8fr] gap-8 mt-10">

    <!-- PERFIL -->

    <div class="card p-8">

        <h2 class="text-3xl
font-black
text-[#5E5653]
mb-8">

            Perfil

        </h2>

        <div class="space-y-5">

            <div class="flex justify-between">

                <span class="text-[#7B7F8A]">

                    Nombre

                </span>

                <span class="font-bold">

                    {{ Auth::user()->name }}

                </span>

            </div>

            <div class="flex justify-between">

                <span class="text-[#7B7F8A]">

                    Correo

                </span>

                <span class="font-bold">

                    {{ Auth::user()->email }}

                </span>

            </div>

            <div class="flex justify-between">

                <span class="text-[#7B7F8A]">

                    Rol

                </span>

                <span class="
bg-[#6B7C98]
text-white
px-5
py-2
rounded-full">

                    {{ Auth::user()->rol }}

                </span>

            </div>

        </div>

    </div>

    <!-- ACTIVIDAD -->

    <div class="card
p-8">

        <h2 class="text-3xl
font-black
text-[#5E5653]
mb-8">

            Actividad

        </h2>

        <div class="space-y-6">

            <div>

                <p class="text-[#7B7F8A]">

                    Completadas

                </p>

                <div class="
w-full
bg-gray-200
rounded-full
h-4
mt-3">

                    <div class="
bg-green-500
h-4
rounded-full" style="
width:
{{ $totalTareas>0
?($tareasEntregadas/$totalTareas)*100
:0
}}%;
">

                    </div>

                </div>

            </div>

            <div>

                <p class="text-[#7B7F8A]">

                    Pendientes

                </p>

                <div class="
w-full
bg-gray-200
rounded-full
h-4
mt-3">

                    <div class="
bg-[#AB978C]
h-4
rounded-full" style="
width:
{{ $totalTareas>0
?($tareasPendientes/$totalTareas)*100
:0
}}%;
">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection