<x-app-layout>
    <h1>Añadir tarea</h1>
    <div class="form">
        <form action="/tareas/store" method="post">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo tarea">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion tarea"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_limite">Fecha límite</label>
                <input type="date" class="form-control" id="fecha_limite" name="fecha_limite">
            </div>
            <div class="form-group">
                <label for="trabajador_id">Trabajador</label>
                <select class="form-control" id="trabajador_id" name="trabajador_id">
                    @foreach ($trabajadores as $trabajador)
                        <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group my-2">
                <button type="submit" class="btn btn-primary">Añadir tarea</button>
            </div>
        </form>
    </div>
</x-app-layout>
