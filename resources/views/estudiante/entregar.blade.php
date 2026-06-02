@extends('layouts.estudiante')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Entregar Tarea
</h1>
@if(session('error'))

    <div class="bg-red-500 text-white p-4 rounded mb-4">

        {{ session('error') }}

    </div>

@endif
<form method="POST"
      action="{{ route('entregas.store') }}"
      enctype="multipart/form-data">

    @csrf

    <input type="hidden"
           name="tarea_id"
           value="{{ $tarea->id }}">

    <div class="mb-4">

        <label class="block mb-2">
            Comentario
        </label>

        <textarea name="comentario"
                  class="w-full border rounded p-2"></textarea>

    </div>

    <div class="mb-4">

        <label class="block mb-2">
            Adjuntar archivo
        </label>

        <input type="file"
            name="archivo"
            class="w-full border rounded p-2">

    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Entregar
    </button>

</form>

@endsection