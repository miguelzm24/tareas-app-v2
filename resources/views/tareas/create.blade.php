<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
</head>
<body>
    <h1>Añadir tarea</h1>
    <form action="/tareas/store" method="post">
        @csrf
        <input type="text" name="titulo" placeholder="Titulo tarea">
        <textarea name="descripcion" placeholder="Descripcion tarea"></textarea>
        <input type="date" name="fecha_limite">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select>
        <input type="submit" value="Añadir tarea">
    </form>
</body>
</html>