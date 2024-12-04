<x-app-layout>
    <div>
        <h1>Datos del trabajador</h1>
        <div>
            <div>
                <h5>Nombre: {{$trabajador->nombre}}</h5>
                <h5>Apellido: {{$trabajador->apellido}}</h5>
                <h5>DNI: {{$trabajador->dni}}</h5>
            </div>
        </div>
        <h3>Tareas:</h3>
        <ul>
            @foreach ($trabajador->tareas as $tarea)
                <li>
                    <h5>{{$tarea->titulo}} ({{$tarea->fecha_limite}})</h5>
                    <p>{{$tarea->descripcion}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
