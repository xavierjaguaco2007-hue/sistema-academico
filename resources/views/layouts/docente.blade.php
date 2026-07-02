<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1">

<title>

Urban Slate · Docente

</title>

@vite([
'resources/css/app.css',
'resources/js/app.js'
])

</head>

<body class="overflow-hidden">

<div class="h-screen p-4 overflow-hidden">

<div
class="
panel
max-w-[1500px]
mx-auto
h-full
overflow-hidden
">

<div class="flex h-full">

<!-- SIDEBAR -->

<aside
class="
sidebar
w-[250px]
bg-[#5E5653]
text-white
flex
flex-col
shrink-0
">

<!-- LOGO -->

<div
class="
px-10
pt-12
pb-10
">

<h1
class="
text-5xl
font-black
leading-none
">

Urban

<br>

Slate

</h1>

<div
class="
w-16
h-[3px]
bg-[#67B4B0]
mt-6
">

</div>

</div>

<!-- MENU -->

<nav
class="
flex-1
py-6
">

<a
href="{{ route('docente.dashboard') }}"
class="
menu-item
{{ request()->routeIs('docente.dashboard')
? 'menu-active'
: '' }}
">

Dashboard

</a>

<a
href="{{ route('tareas.index') }}"
class="
menu-item
{{ request()->routeIs('tareas.*')
? 'menu-active'
: '' }}
">

Gestionar tareas

</a>

</nav>

<!-- FOOTER -->

<div
class="
p-8
border-t
border-white/10
">

<div
class="
text-sm
text-gray-300
mb-5
">

{{ Auth::user()->name }}

</div>

<form
method="POST"
action="{{ route('logout') }}">

@csrf

<button
class="
btn-main
w-full
">

Cerrar sesión

</button>

</form>

</div>

</aside>

<!-- CONTENIDO -->

<div
class="
flex-1
h-full
overflow-hidden
">

<!-- TOPBAR -->

<div
class="
h-[70px]
border-b
border-[#D9D9D9]
flex
items-center
justify-end
px-10
">

<div
class="
text-[#8C9298]
font-medium
">

Bienvenido

{{ Auth::user()->name }}

</div>

</div>

<!-- PAGE -->

<div
class="
h-[calc(100%-70px)]
overflow-y-auto
px-10
py-8
">

@yield('content')

</div>

</div>

</div>

</div>

</div>

</body>

</html>