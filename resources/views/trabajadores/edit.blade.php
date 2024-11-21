<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
</head>
<body>
    <h1>Editar trabajador</h1>
    <form action="/trabajadores/update/{id}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" value="{{ $trabajador->nombre }}">
        <input type="text" name="apellido" value="{{ $trabajador->apellido }}">
        <input type="text" name="dni" value="{{ $trabajador->dni }}">
        <input type="submit" value="Editar trabajador">
    </form>
</body>
</html>