<x-app-layout>
    <h1>Editar tarea</h1>
    <div class="form">
        <form action="{{route('tareas.update', $tarea->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título tarea" value="{{$tarea->titulo}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción tarea">{{$tarea->descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label for="fecha_limite">Fecha límite</label>
                <input type="date" class="form-control" id="fecha_limite" name="fecha_limite" value="{{$tarea->fecha_limite}}">
            </div>
            <div class="form-group">
                <label for="trabajador_id">Trabajador</label>
                <select class="form-control" id="trabajador_id" name="trabajador_id">
                    @foreach ($trabajadores as $trabajador)
                        <option value="{{ $trabajador->id }}" {{$tarea->trabajador_id == $trabajador->id ? 'selected' : ''}}>{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group my-2">
                <button type="submit" class="btn btn-primary">Editar tarea</button>
            </div>
        </form>
    </div>
</x-app-layout>
