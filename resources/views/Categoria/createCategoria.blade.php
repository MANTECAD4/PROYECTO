<x-mi-layout>
    <div class="pagetitle">
        <h1>Inventario de productos</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('categoria.index')}}">Categorías</a></li>
            <li class="breadcrumb-item active">Dar de alta categoría</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Agregar categoría</h5>
                    <p>Aqui puedes añadir nuevos registros de categorías de productos al inventario!</p>
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
                    <form action="/categoria" method="POST" class="row g-3">
                        @csrf <!-- Agrega el token CSRF -->
                        <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
                            <label for="nombre">Nombre</label>
                        </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px;" required>{{old('descripcion')}}</textarea>
                                <label for="descripcion">Descripción</label>
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
    
        
      