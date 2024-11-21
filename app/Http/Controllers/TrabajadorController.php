<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    public function index() {
        $trabajadores = Trabajador::all();
        return view('trabajadores.index', compact('trabajadores'));

    }

    public function create() {
        return view('trabajadores.create');
    }

    public function edit($id) {
        $trabajador = Trabajador::find($id);
        return view('trabajadores.edit', compact('trabajador'));
    }

    public function store(Request $request){
        

        $validate = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|unique:trabajadores,dni',
        ]);

        $trabajador = new Trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->dni = $request->dni;
        $trabajador->save();
        //Trabajador::create($request->all());
    
        return redirect('/trabajadores/edit/'.$trabajador->id);
    }
}
