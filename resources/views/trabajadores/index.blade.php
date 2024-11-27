@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Trabajadores</h1>
        <ul class="list-group">
            @foreach ($trabajadores as $trabajador)
                <li class="list-group-item">
                    <a href="/trabajadores/show/{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellidos }}</a>
                </li>
            @endforeach
        </ul>
        <a href="/trabajadores/create" class="btn btn-primary mt-4">Formulario para añadir trabajador</a>
    </div>
@endsection