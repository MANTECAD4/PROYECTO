<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>
<body>
    <h1>Listado de productos</h1>
    <ol>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} - {{ $producto->descripcion }}</li>
        @endforeach
        <a href="/producto/create" style="color: #007BFF"">Registrar producto</a>
    </ol>
</body>
</html>