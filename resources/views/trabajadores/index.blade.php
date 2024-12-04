<x-app-layout>
    <div>
        <h1>Lista de Trabajadores</h1>
        <ul>
            @foreach ($trabajadores as $trabajador)
                <li>
                    <a href="/trabajadores/show/{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellidos }}</a>
                </li>
            @endforeach
        </ul>
        <a href="/trabajadores/create">Formulario para añadir trabajador</a>
    </div>
</x-app-layout>
