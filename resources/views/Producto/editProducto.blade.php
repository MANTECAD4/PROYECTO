<x-mi-layout>
    <div class="pagetitle">
        <h1>Inventario de productos</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('producto.index')}}">Productos</a></li>
            <li class="breadcrumb-item ">Modificar producto</li>
            <li class="breadcrumb-item active">Editar {{$producto->nombre}}</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->
        
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar producto</h5>
                    <p>Aqui se editan los datos de los productos!</p>
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
                    <form action="{{route('producto.update',$producto)}}" method="POST" class="row g-3">
                        @csrf <!-- Agrega el token CSRF -->
                        @method('PATCH')
                        <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name') ?? $producto->name}}" required>
                            <label for="name">Nombre</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="{{old('marca') ?? $producto->marca}}" required>
                            <label for="marca">Marca</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Categoría</label>
                                <div class="col-sm-10">
                                  <select class="form-select" aria-label="Default select example" name="categoria_id" id="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" @if ($categoria->id == $producto->categoria_id) selected @endif>
                                            {{ $categoria->nombre }}
                                        </option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px;">{{old('descripcion') ?? $producto->descripcion}}</textarea>
                                <label for="descripcion">Descripción</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                            <div class="form-floating">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Precio" step="0.01" value="{{old('price') ?? $producto->price}}" required>
                            <label for="price">Precio</label>
                            </div>
                        
                        </div>
                        <div class="col-md-2">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="unidades" name="unidades" placeholder="Unidades" step="1"  value="{{old('unidades') ?? $producto->unidades}}" required>
                            <label for="unidades">Unidades</label>
                        </div>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Guardar</button>
                        <a href="{{ route('producto.index') }}" class="btn btn-secondary">
                            <i class="bi bi-tag me-2"></i>Volver al inicio
                        </a> 
                        </div>
                    </form><!-- End floating Labels Form -->
                </div>
            </div>
        </div>
    </section>
</x-mi-layout>
    
