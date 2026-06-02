<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Panel Estudiante</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#E9E6E7] min-h-screen">

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-72 min-h-screen bg-[#5E5653] text-white shadow-2xl">

        <!-- LOGO -->
        <div class="p-8 border-b border-[#AB978C]">

            <h1 class="text-4xl font-bold tracking-wide">
                Urban Slate
            </h1>

            <p class="text-sm text-gray-300 mt-2">
                Sistema Académico
            </p>

        </div>

        <!-- USER -->
        <div class="p-6 border-b border-[#AB978C]">

            <p class="text-gray-300 text-sm">
                Bienvenido
            </p>

            <h2 class="text-xl font-bold mt-1">
                {{ Auth::user()->name }}
            </h2>

        </div>

        <!-- MENU -->
        <nav class="mt-6 px-4">

            <a href="{{ route('estudiante.dashboard') }}"
            class="flex items-center gap-3 px-5 py-4 rounded-2xl mb-3 transition duration-300

            {{ request()->routeIs('estudiante.dashboard')
                    ? 'bg-[#6B7C98] shadow-lg'
                    : 'hover:bg-[#7B7F8A]' }}">


                <span class="text-2xl">🏠</span>

                <span class="font-semibold">
                    Dashboard
                </span>

            </a>

            <a href="{{ route('estudiante.tareas') }}"
            class="flex items-center gap-3 px-5 py-4 rounded-2xl mb-3 transition duration-300

            {{ request()->routeIs('estudiante.tareas')
                    ? 'bg-[#6B7C98] shadow-lg'
                    : 'hover:bg-[#7B7F8A]' }}">


                <span class="text-2xl">📚</span>

                <span class="font-semibold">
                    Tareas
                </span>

            </a>

            <a href="#"
               class="flex items-center gap-3 px-5 py-4 rounded-2xl mb-3 hover:bg-[#7B7F8A] transition duration-300">

                <span class="text-2xl">🤖</span>

                <span class="font-semibold">
                    Asistente IA
                </span>

            </a>

        </nav>

        <!-- LOGOUT -->
        <div class="absolute bottom-0 w-72 p-6">

            <form method="POST"
                  action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full bg-[#AB978C] hover:bg-[#6B7C98] transition duration-300 py-4 rounded-2xl font-bold shadow-lg">

                    Cerrar sesión

                </button>

            </form>

        </div>

    </aside>

    <!-- CONTENIDO -->
    <main class="flex-1 p-10">

        @yield('content')

    </main>

</div>

</body>
</html>