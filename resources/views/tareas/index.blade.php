<x-app-layout>
    <div>
        <h1>Lista de Tareas</h1>
        <ul>
            @foreach ($tareas as $tarea)
                <li>
                    <a href="/tareas/edit/{{ $tarea->id }}">{{ $tarea->titulo }}</a>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('tareas.create') }}" class="btn btn-primary mt-4">Formulario para añadir tarea</a>
    </div>
</x-app-layout>
