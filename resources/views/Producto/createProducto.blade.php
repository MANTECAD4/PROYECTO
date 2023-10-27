<x-mi-layout>
    <div class="pagetitle">
        <h1>Inventario de productos</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('producto.index')}}">Productos</a></li>
            <li class="breadcrumb-item active">Dar de alta producto</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agregar producto</h5>
                    <p>Aqui puedes añadir nuevos registros de productos al inventario!</p>
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
                    <form action="/producto" method="POST" class="row g-3">
                        @csrf <!-- Agrega el token CSRF -->
                        <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
                            <label for="nombre">Nombre</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="{{old('marca')}}" required>
                            <label for="marca">Marca</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Categoría</label>
                                <div class="col-sm-10">
                                  <select class="form-select" aria-label="Default select example" name="categoria_id" id="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px;">{{old('descripcion')}}</textarea>
                                <label for="descripcion">Descripción</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                            <div class="form-floating">
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" step="0.01" value="{{old('precio')}}" required>
                            <label for="precio">Precio</label>
                            </div>
                        
                        </div>
                        <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="unidades" name="unidades" placeholder="Unidades" step="1"  value="{{old('unidades')}}" required>
                            <label for="unidades">Unidades</label>
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
    
        
      