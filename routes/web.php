<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\AIController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    if(auth()->check()){

        return match(auth()->user()->rol){

            'docente'
                => redirect()->route('docente.dashboard'),

            'estudiante'
                => redirect()->route('estudiante.dashboard'),

            default
                => redirect('/login')
        };

    }

    return redirect('/login');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:estudiante'])->group(function () {

    Route::get('/estudiante/dashboard', [EstudianteController::class, 'dashboard'])
        ->name('estudiante.dashboard');

    Route::get('/estudiante/tareas', [EstudianteController::class, 'tareas'])
    ->name('estudiante.tareas');

    Route::get('/estudiante/asistente', [AIController::class, 'index'])
        ->name('estudiante.asistente');

    Route::post('/ia/preguntar', [AIController::class, 'preguntar'])
        ->name('ia.preguntar');

});

Route::middleware(['auth', 'role:docente'])->group(function () {

    Route::get('/docente/dashboard', [DocenteController::class, 'dashboard'])
        ->name('docente.dashboard');

});

Route::middleware(['auth', 'role:docente'])->group(function () {

    Route::resource('tareas', TareaController::class);

});

Route::middleware(['auth', 'role:estudiante'])->group(function () {

    Route::get('/entregas/create/{id}',
        [EntregaController::class, 'create'])
        ->name('entregas.create');

    Route::post('/entregas/store',
        [EntregaController::class, 'store'])
        ->name('entregas.store');

});



require __DIR__.'/auth.php';
