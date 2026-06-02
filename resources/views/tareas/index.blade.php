<x-app-layout>

    <div class="p-6">

        <h1 class="text-3xl font-bold mb-6">
            Lista de Tareas
        </h1>

        <a href="{{ route('tareas.create') }}"
           class="bg-green-500 text-white px-4 py-2 rounded">
            Nueva Tarea
        </a>

        <table class="w-full mt-6 border">

            <tr class="bg-gray-200">
                <th class="p-2">Título</th>
                <th class="p-2">Fecha</th>
            </tr>

            @foreach($tareas as $tarea)

            <tr>
                <td class="border p-2">
                    {{ $tarea->titulo }}
                </td>

                <td class="border p-2">
                    {{ $tarea->fecha_entrega }}
                </td>
            </tr>

            @endforeach

        </table>

    </div>

</x-app-layout>