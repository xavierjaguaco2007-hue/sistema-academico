@extends('layouts.docente')

@section('content')

<div class="mb-10">

<p
class="
uppercase
tracking-[6px]
text-sm
subtitle">

Docente

</p>

<h1
class="
text-5xl
font-black
title
mt-2">

Dashboard

</h1>

<p class="subtitle mt-3">

Gestiona tareas y actividad académica.

</p>

</div>

<!-- MÉTRICAS -->

<div
class="
grid
grid-cols-2
xl:grid-cols-4
gap-6">

<!-- TAREAS -->

<div class="card p-7">

<p class="subtitle">

Tareas creadas

</p>

<h2
class="
text-5xl
font-black
title
mt-4">

{{ $totalTareas }}

</h2>

</div>

<!-- ENTREGAS -->

<div class="card p-7">

<p class="subtitle">

Entregas

</p>

<h2
class="
text-5xl
font-black
mt-4
text-[#67B4B0]">

{{ $totalEntregas }}

</h2>

</div>

<!-- PENDIENTES -->

<div class="card p-7">

<p class="subtitle">

Pendientes

</p>

<h2
class="
text-5xl
font-black
mt-4
text-[#AB978C]">

{{ $pendientes }}

</h2>

</div>

<!-- ACCIÓN -->

<a
href="{{ route('tareas.create') }}"

class="
card
p-7
btn-main
flex
items-center
justify-center
text-xl
font-bold">

Nueva tarea

</a>

</div>

<!-- INFERIOR -->

<div
class="
grid
xl:grid-cols-[2fr_1fr]
gap-6
mt-8">

<!-- RESUMEN -->

<div
class="
card
p-8">

<h2
class="
text-3xl
font-black
title">

Resumen

</h2>

<div class="mt-8 space-y-6">

<div>

<p class="subtitle">

Docente

</p>

<p class="font-bold">

{{ Auth::user()->name }}

</p>

</div>

<div>

<p class="subtitle">

Correo

</p>

<p class="font-bold">

{{ Auth::user()->email }}

</p>

</div>

<div>

<p class="subtitle">

Rol

</p>

<p class="font-bold">

{{ Auth::user()->rol }}

</p>

</div>

</div>

</div>

<!-- ACTIVIDAD -->

<div
class="
card
p-8">

<h2
class="
text-3xl
font-black
title">

Actividad

</h2>

@if($ultimaEntrega)

<div class="mt-8">

<p class="subtitle">

Última entrega

</p>

<p
class="
font-bold
mt-3">

{{ $ultimaEntrega->created_at }}

</p>

</div>

@else

<div
class="
mt-10
text-center
subtitle">

Sin entregas

</div>

@endif

</div>

</div>

@endsection