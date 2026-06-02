<x-app-layout>

    <div class="p-6">

        <h1 class="text-3xl font-bold mb-6">
            Crear Tarea
        </h1>

        <form method="POST" action="{{ route('tareas.store') }}">

            @csrf

            <div class="mb-4">
                <label>Título</label>

                <input type="text"
                       name="titulo"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Descripción</label>

                <textarea name="descripcion"
                          class="w-full border rounded p-2"></textarea>
            </div>

            <div class="mb-4">
                <label>Fecha entrega</label>

                <input type="date"
                       name="fecha_entrega"
                       class="w-full border rounded p-2">
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Guardar
            </button>

        </form>

    </div>

</x-app-layout>