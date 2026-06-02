<x-app-layout>
    <div class="min-h-screen bg-gray-100 p-8">

        <h1 class="text-4xl font-bold text-blue-600">
            Panel Docente
        </h1>

        <div class="mt-6 bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold">
                Bienvenido {{ Auth::user()->name }}
            </h2>

            <p>Rol: {{ Auth::user()->rol }}</p>
        </div>

    </div>
</x-app-layout>