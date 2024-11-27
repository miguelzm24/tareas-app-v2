@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Datos del trabajador</h1>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{$trabajador->nombre}}</h5>
                <h5 class="card-title">Apellido: {{$trabajador->apellido}}</h5>
                <h5 class="card-title">DNI: {{$trabajador->dni}}</h5>
            </div>
        </div>
        <h3 class="my-4">Tareas:</h3>
        <ul class="list-group">
            @foreach ($trabajador->tareas as $tarea)
                <li class="list-group-item">
                    <h5>{{$tarea->titulo}} ({{$tarea->fecha_limite}})</h5>
                    <p>{{$tarea->descripcion}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection