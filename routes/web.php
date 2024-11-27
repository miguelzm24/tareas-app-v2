<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

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

