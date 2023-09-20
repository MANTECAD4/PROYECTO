<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Empleados</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Formulario de Empleados</h1>
        <form action="/empleado" method="POST">
            @csrf <!-- Agrega el token CSRF -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Empleado:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="correo_electronico" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <textarea class="form-control" id="direccion" name="direccion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="fecha_contratacion" class="form-label">Fecha de Contratación:</label>
                <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" required>
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salario:</label>
                <input type="number" class="form-control" id="salario" name="salario" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>

            <div class="mb-3">
                <label for="departamento" class="form-label">Departamento:</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Empleado</button>
        </form>
    </div>

    <!-- Agrega los enlaces a los archivos JavaScript de Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>