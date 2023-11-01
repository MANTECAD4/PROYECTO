<x-mi-layout>
    <div class="pagetitle">
        <h1>Inventario de empleados</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('empleado.index')}}">empleados</a></li>
            <li class="breadcrumb-item active">Dar de alta empleado</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agregar empleado</h5>
                    <p>Aqui puedes añadir nuevos registros de empleados al inventario!</p>
                    <!-- Floating Labels Form -->
                    <!-- /resources/views/post/create.blade.php -->
                        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- Create Post Form -->
                    <form action="/empleado" method="POST" class="row g-3">
                        @csrf <!-- Agrega el token CSRF -->

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}" required>
                                <label for="name">Nombre</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Télefono" value="{{old('telefono')}}" required>
                                <label for="telefono">Télefono</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <label for="fecha_nac" class="col-sm-3  col-form-label">Fecha de nacimiento</label>
                                <div class="col">
                                    <input type="date" id="fecha_nac" name="fecha_nac" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Género</label>
                                <div class="col">
                                    <select class="form-select" id="genero" name="genero" aria-label="Default select example">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    </select>
                                </div>
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{old('correo')}}" required>
                                <label for="correo">Correo</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="sueldo" name="sueldo" placeholder="Sueldo" step="0.01" min="1" value="{{old('sueldo')}}" required>
                                <label for="sueldo">Sueldo</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{old('direccion')}}" required>
                                <label for="direccion">Dirección</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Contraseña"  required>
                                <label for="password1">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirma contraseña"  required>
                                <label for="password2">Confirma contraseña</label>
                            </div>
                        </div>
                        
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Guardar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                        </div>
                    </form><!-- End floating Labels Form -->
                </div>
            </div>
        </div>
    </section>
</x-mi-layout>
    
        
      