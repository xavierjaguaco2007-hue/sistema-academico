@extends('layouts.docente')

@section('content')

<!-- HEADER -->

<div
class="
flex
justify-between
items-center
mb-10">

<div>

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

Gestión de Tareas

</h1>

<p
class="
subtitle
mt-3">

Administra las actividades académicas.

</p>

</div>

<a
href="{{ route('tareas.create') }}"

class="
btn-main
px-8
h-[58px]
flex
items-center
font-semibold">

Nueva tarea

</a>

</div>

<!-- MÉTRICAS -->

<div
class="
card
p-8
mb-8">

<p class="subtitle">

Total de tareas

</p>

<h2
class="
text-6xl
font-black
title
mt-3">

{{ $tareas->count() }}

</h2>

</div>

<!-- LISTA -->

<div
class="
card
overflow-hidden">

<!-- CABECERA -->

<div
class="
grid
grid-cols-[2fr_1fr_220px]
px-8
py-6
border-b
border-white/30
text-sm
uppercase
tracking-[2px]
subtitle">

<div>

Título

</div>

<div>

Entrega

</div>

<div>

Acciones

</div>

</div>

<!-- FILAS -->

@forelse($tareas as $tarea)

<div
class="
grid
grid-cols-[2fr_1fr_220px]
items-center
px-8
py-6
border-b
border-white/20
hover:bg-white/10
transition">

<!-- TÍTULO -->

<div>

<h2
class="
title
text-xl
font-bold">

{{ $tarea->titulo }}

</h2>

<p
class="
subtitle
mt-2
line-clamp-2">

{{ $tarea->descripcion }}

</p>

</div>

<!-- FECHA -->

<div>

<p
class="
font-semibold
text-[#67B4B0]">

{{ $tarea->fecha_entrega }}

</p>

</div>

<!-- BOTONES -->

<div
class="
flex
gap-3">

<a
href="{{ route('tareas.edit',$tarea->id) }}"

class="
h-[46px]
px-5
card
flex
items-center
justify-center
title
font-semibold">

Editar

</a>

<form
action="{{ route('tareas.destroy',$tarea->id) }}"
method="POST">

@csrf
@method('DELETE')

<button
onclick="return confirm('¿Eliminar tarea?')"

class="
h-[46px]
px-5
bg-red-500/90
text-white
font-semibold">

Eliminar

</button>

</form>

</div>

</div>

@empty

<div
class="
p-20
text-center">

<h2
class="
title
text-3xl
font-black">

Sin tareas

</h2>

<p
class="
subtitle
mt-4">

Crea una nueva tarea para comenzar.

</p>

</div>

@endforelse

</div>

@endsection