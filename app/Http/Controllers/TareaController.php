<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarea;
use App\Models\Trabajador;

class TareaController extends Controller
{
    public function index() {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create() {
        $trabajadores = Trabajador::all();
        return view('tareas.create', compact('trabajadores'));
    }

    public function store(Request $request){
        $rules = [
            'titulo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:255',
            'fecha_limite' => 'required|date',
            'trabajador_id' => 'required|exists:trabajadores,id',
        ];
        $messages = [
            'titulo.required' => 'El campo título es obligatorio',
            'titulo.string' => 'El campo título debe ser un texto',
            'titulo.max' => 'El campo título no debe superar los 50 caracteres',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'descripcion.string' => 'El campo descripción debe ser un texto',
            'descripcion.max' => 'El campo descripción no debe superar los 255 caracteres',
            'fecha_limite.required' => 'El campo fecha límite es obligatorio',
            'fecha_limite.date' => 'El campo fecha límite debe ser una fecha',
            'trabajador_id.required' => 'El campo trabajador es obligatorio',
            'trabajador_id.exists' => 'El trabajador no existe',
        ];
        $validatedData = $request->validate($rules, $messages);
        Tarea::create($validatedData);
        return redirect()->route('tareas.index');
    }

    public function edit($id) {
        $tarea = Tarea::find($id);
        $trabajadores = Trabajador::all();
        return view('tareas.edit', compact('tarea', 'trabajadores'));
    }
    public function update(Request $request, $id) {
        $rules = [
            'titulo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:255',
            'fecha_limite' => 'required|date',
            'trabajador_id' => 'required|exists:trabajadores,id',
        ];
        $messages = [
            'titulo.required' => 'El campo título es obligatorio',
            'titulo.string' => 'El campo título debe ser un texto',
            'titulo.max' => 'El campo título no debe superar los 50 caracteres',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'descripcion.string' => 'El campo descripción debe ser un texto',
            'descripcion.max' => 'El campo descripción no debe superar los 255 caracteres',
            'fecha_limite.required' => 'El campo fecha límite es obligatorio',
            'fecha_limite.date' => 'El campo fecha límite debe ser una fecha',
            'trabajador_id.required' => 'El campo trabajador es obligatorio',
            'trabajador_id.exists' => 'El trabajador no existe',
        ];
        $validatedData = $request->validate($rules, $messages);
        $tarea = Tarea::find($id);
        $tarea->update($validatedData);
        return redirect()->route('tareas.index');

    }

    public function destroy($id) {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return redirect()->route('tareas.index');
    }

}
