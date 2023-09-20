<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
</head>
<body>
    <h1>Listado de empleados</h1>
    <ol>
        @foreach ($empleados as $empleado)
            <li>{{ $empleado->nombre }} - {{ $empleado->correo_electronico }}</li>
        @endforeach
        <a href="/empleado/create" style="color: #007BFF"">Registrar Empleado</a>
    </ol>
</body>
</html>