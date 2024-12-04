<x-app-layout>
    <div>
        <h1>Añadir trabajador</h1>
        <form action="/trabajadores/store" method="post">
            @csrf
            @if ($errors->any())
                <div>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre trabajador">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido trabajador">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI trabajador">
            </div>
            <button type="submit" class="btn btn-primary">Añadir trabajador</button>
        </form>
    </div>
</x-app-layout>
