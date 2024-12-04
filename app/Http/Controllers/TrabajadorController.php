<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    public function index() {
        $trabajadores = Trabajador::all();
        return view('trabajadores.index', compact('trabajadores'));
        //return response()->json($trabajadores);

    }

    public function create() {
        return view('trabajadores.create');
    }

    public function show($id) {
        $trabajador = Trabajador::find($id);
        return view('trabajadores.show', compact('trabajador'));
        //return response()->json($trabajador);

    }

    public function store(Request $request){
        $rules = [
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'dni' => 'required|unique:trabajadores,dni|digits:8',
        ];
        $messages = [
            'nombre.required' => 'El campo nombre es obligatorio',
            'nombre.string' => 'El campo nombre debe ser un texto',
            'nombre.max' => 'El campo nombre no debe superar los 50 caracteres',
            'apellido.required' => 'El campo apellido es obligatorio',
            'apellido.string' => 'El campo apellido debe ser un texto',
            'apellido.max' => 'El campo apellido no debe superar los 50 caracteres',
            'dni.required' => 'El campo dni es obligatorio',
            'dni.unique' => 'El dni ya está en uso',
            'dni.digits' => 'El dni debe tener 8 dígitos',
        ];

        $validatedData = $request->validate($rules, $messages);

        Trabajador::create($validatedData);
    
        return redirect()->route('trabajadores.index')->with('success', 'Trabajador creado correctamente');
        //return response()->json(['message' => 'Trabajador creado correctamente']);
    }
}
