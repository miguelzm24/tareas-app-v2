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

    public function store(Request $request){
        $trabajador = new Trabajador();
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->dni = $request->dni;
        $trabajador->save();

        return redirect('/trabajadores/index');
        //Trabajador::create($request->all());
    }
}
