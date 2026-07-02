@extends('layouts.docente')

@section('content')

<!-- HEADER -->

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

Crear Tarea

</h1>

<p
class="
subtitle
mt-3">

Publica una nueva actividad académica.

</p>

</div>

<!-- FORM -->

<div
class="
card
max-w-5xl
p-10">

<form
method="POST"
action="{{ route('tareas.store') }}">

@csrf

<!-- TÍTULO -->

<div class="mb-8">

<label
class="
block
title
font-semibold
mb-3">

Título

</label>

<input
type="text"
name="titulo"

class="
w-full
h-[60px]
bg-white/50
border
border-white/40
px-5
outline-none
focus:border-[#67B4B0]
focus:ring-0"

placeholder="Ej. Investigación sobre XML"

required>

</div>

<!-- DESCRIPCIÓN -->

<div class="mb-8">

<label
class="
block
title
font-semibold
mb-3">

Descripción

</label>

<textarea
name="descripcion"

rows="8"

class="
w-full
bg-white/50
border
border-white/40
p-5
resize-none
outline-none
focus:border-[#67B4B0]
focus:ring-0"

placeholder="Describe la actividad..."

required></textarea>

</div>

<!-- FECHA -->

<div class="mb-10">

<label
class="
block
title
font-semibold
mb-3">

Fecha de entrega

</label>

<input
type="date"
name="fecha_entrega"

class="
w-full
h-[60px]
bg-white/50
border
border-white/40
px-5
outline-none
focus:border-[#67B4B0]
focus:ring-0"

required>

</div>

<!-- ACCIONES -->

<div class="flex gap-4">

<button
type="submit"

class="
btn-main
px-10
h-[58px]
font-semibold">

Guardar

</button>

<a
href="{{ route('tareas.index') }}"

class="
h-[58px]
px-10
flex
items-center
justify-center
card
title
font-semibold">

Cancelar

</a>

</div>

</form>

</div>

@endsection