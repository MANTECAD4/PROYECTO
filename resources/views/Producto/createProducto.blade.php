<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Formulario de Producto</h2>
                </div>
                <div class="card-body">
                    <form action="/producto" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción del Producto</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio del Producto</label>
                            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría del Producto</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" required>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca del Producto</label>
                            <input type="text" class="form-control" id="marca" name="marca" required>
                        </div>
                        <div class="form-group">
                            <label for="unidades">Unidades Disponibles</label>
                            <input type="number" class="form-control" id="unidades" name="unidades" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
