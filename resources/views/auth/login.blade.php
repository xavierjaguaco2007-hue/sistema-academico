<x-guest-layout>

<div
class="
min-h-screen
flex
items-center
justify-center
px-6">

<div
class="
panel
w-full
max-w-[1200px]
grid
lg:grid-cols-2
overflow-hidden">

<!-- IZQUIERDA -->

<div
class="
bg-[#5E5653]
text-white
p-16
flex
flex-col
justify-center">

<p
class="
uppercase
tracking-[8px]
text-sm
text-[#67B4B0]">

Urban Slate

</p>

<h1
class="
text-7xl
font-black
mt-6
leading-none">

Academic

<br>

Portal

</h1>

<p
class="
mt-8
text-gray-300
leading-8">

Sistema académico moderno para docentes y estudiantes.

</p>

</div>

<!-- DERECHA -->

<div
class="
bg-white/45
backdrop-blur-xl
p-16">

<h2
class="
text-5xl
font-black
title">

Iniciar sesión

</h2>

<p
class="
subtitle
mt-4
mb-10">

Ingresa tus credenciales.

</p>

<form
method="POST"
action="{{ route('login') }}">

@csrf

<!-- EMAIL -->

<div class="mb-6">

<input
type="email"
name="email"

required

placeholder="Correo electrónico"

class="
w-full
h-[60px]
border
border-white/50
bg-white/50
px-6
outline-none
focus:border-[#67B4B0]
focus:ring-0">

</div>

<!-- PASSWORD -->

<div class="mb-6">

<input
type="password"
name="password"

required

placeholder="Contraseña"

class="
w-full
h-[60px]
border
border-white/50
bg-white/50
px-6
outline-none
focus:border-[#67B4B0]
focus:ring-0">

</div>

<!-- REMEMBER -->

<div
class="
flex
justify-between
items-center
mb-8">

<label
class="
flex
items-center
gap-3
subtitle">

<input
type="checkbox"
name="remember">

Recordarme

</label>

@if(Route::has('password.request'))

<a
href="{{ route('password.request') }}"
class="text-[#67B4B0]">

¿Olvidaste contraseña?

</a>

@endif

</div>

<!-- BOTON -->

<button
class="
btn-main
w-full
h-[60px]
text-lg
font-bold">

Entrar

</button>

</form>

</div>

</div>

</div>

</x-guest-layout>