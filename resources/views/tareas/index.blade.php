@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Tareas</h1>
        <ul class="list-group">
            @foreach ($tareas as $tarea)
                <li class="list-group-item">
                    <a href="/tareas/edit/{{ $tarea->id }}">{{ $tarea->titulo }}</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('tareas.create') }}" class="btn btn-primary mt-4">Formulario para añadir tarea</a>
    </div>
@endsection