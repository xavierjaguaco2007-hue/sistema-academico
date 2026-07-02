@extends('layouts.estudiante')

@section('content')

<!-- HEADER -->

<div class="mb-10">

    <p class="uppercase tracking-[6px] text-sm text-[#7B7F8A]">

        Tareas

    </p>

    <h1 class="text-5xl font-black text-[#5E5653] mt-2">

        Tareas Académicas

    </h1>

    <p class="text-[#7B7F8A] mt-3">

        Consulta y entrega tus actividades.

    </p>

</div>

<!-- LISTA -->

<div class="space-y-5">

@forelse($tareas as $tarea)

<div
class="
glass
rounded-[32px]
px-8
py-7">

<div
class="
grid
xl:grid-cols-[1fr_240px]
gap-8
items-center">

<!-- IZQUIERDA -->

<div
class="
flex
items-start
gap-6">

<!-- ICONO -->

<div class="icon-box shrink-0">

<svg
xmlns="http://www.w3.org/2000/svg"
fill="none"
viewBox="0 0 24 24"
stroke-width="1.7"
stroke="currentColor"
class="w-7 h-7">

<path
stroke-linecap="round"
stroke-linejoin="round"
d="M12 6.042A8.967 8.967 0 006 3.75a8.967 8.967 0 00-6 2.292v13.5A8.967 8.967 0 016 17.25a8.967 8.967 0 016 2.292m0-13.5A8.967 8.967 0 0118 3.75a8.967 8.967 0 016 2.292v13.5A8.967 8.967 0 0018 17.25a8.967 8.967 0 00-6 2.292"/>

</svg>

</div>

<!-- TEXTO -->

<div class="flex-1">

<h2
class="
text-2xl
font-black
text-[#5E5653]
leading-tight">

{{ $tarea->titulo }}

</h2>

<p
class="
mt-3
text-[#7B7F8A]
leading-7">

{{ $tarea->descripcion }}

</p>

</div>

</div>

<!-- DERECHA -->

<div
class="
space-y-4">

<div
class="
soft-panel
p-5">

<p
class="
text-xs
uppercase
tracking-[3px]
text-[#7B7F8A]">

Fecha entrega

</p>

<p
class="
mt-2
text-2xl
font-black
text-[#AB978C]">

{{ $tarea->fecha_entrega }}

</p>

</div>

@if(in_array($tarea->id,$entregas))

<a
href="#"

class="
block
text-center
py-4
rounded-[22px]
bg-[#AB978C]/90
backdrop-blur-xl
text-white
font-bold
hover:opacity-90
transition">

Ver entrega

</a>

@else

<a
href="{{ route('entregas.create',$tarea->id) }}"

class="
block
text-center
py-4
rounded-[22px]
bg-[#6B7C98]/90
backdrop-blur-xl
text-white
font-bold
hover:opacity-90
transition">

Entregar tarea

</a>

@endif

</div>

</div>

</div>

@empty

<div
class="
glass
rounded-[32px]
p-16
text-center">

<div
class="
mx-auto
w-24
h-24
rounded-full
bg-white/50
backdrop-blur-xl
flex
items-center
justify-center">

<svg
xmlns="http://www.w3.org/2000/svg"
fill="none"
viewBox="0 0 24 24"
stroke-width="1.6"
stroke="#7B7F8A"
class="w-10 h-10">

<path
stroke-linecap="round"
stroke-linejoin="round"
d="M3 7.5A2.25 2.25 0 015.25 5.25h13.5A2.25 2.25 0 0121 7.5v9A2.25 2.25 0 0118.75 18.75H5.25A2.25 2.25 0 013 16.5v-9z"/>

</svg>

</div>

<h2
class="
mt-8
text-3xl
font-black
text-[#5E5653]">

No hay tareas

</h2>

<p
class="
mt-3
text-[#7B7F8A]">

Las tareas aparecerán aquí.

</p>

</div>

@endforelse

</div>

@endsection