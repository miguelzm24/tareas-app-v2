<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/tareas/index', [TareaController::class, 'index'])->name('tareas.index');
    Route::get('/tareas/create', [TareaController::class, 'create'])->name('tareas.create');
    Route::post('/tareas/store', [TareaController::class, 'store'])->name('tareas.store');
    Route::get('/tareas/edit/{id}', [TareaController::class, 'edit'])->name('tareas.edit');
    Route::put('/tareas/update/{id}', [TareaController::class, 'update'])->name('tareas.update');
    Route::delete('/tareas/destroy/{id}', [TareaController::class, 'destroy'])->name('tareas.destroy');

    Route::get('/trabajadores/index', [TrabajadorController::class, 'index'])->name('trabajadores.index');
    Route::get('/trabajadores/create', [TrabajadorController::class, 'create'])->name('trabajadores.create');
    Route::post('/trabajadores/store', [TrabajadorController::class, 'store'])->name('trabajadores.store');
    Route::get('/trabajadores/show/{id}', [TrabajadorController::class, 'show'])->name('trabajadores.show');
});

require __DIR__ . '/auth.php';
