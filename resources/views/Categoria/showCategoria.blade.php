<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de categoría</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('categoria.index')}}">Categorias</a></li>
            <li class="breadcrumb-item">Inspeccionar categoría</li>
            <li class="breadcrumb-item active">{{$categoria->nombre}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{$categoria->nombre}}</h2>
                    <p>Información de un producto en específico.</p>
                    <!-- Table with stripped rows -->
                    <div class="row">
                        <div class="col">   
                            <h3>Productos de la categoría</h3>                                    
                            <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">UNIDADES</th>
                                    <th scope="col">MARCA</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($categoria->productos as $producto)   
                                    <tr>
                                        <td scope="row">{{ $producto->id }}</td>
                                        <td>{{ $producto->name }}</td>
                                        <td>${{ $producto->price }}</td>
                                        <td>{{ $producto->unidades }}</td>
                                        <td>{{ $producto->marca }}</td>                        
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="col">
                            <div class="portfolio-info">
                                <h3>Información de categoría</h3>
                                <ul>
                                    <li><strong>ID</strong>: {{ $categoria->id }}</li>
                                    <li><strong>Nombre</strong>: {{$categoria->nombre}}</li>
                                </ul>
                            </div>
                            <div class="portfolio-description">
                                <h2>Descripción</h2>
                                <p>
                                    {{$categoria->descripcion}}
                                </p>
                            </div> 
                        </div>
                        <div class="text-center ">
                            <a href="{{ route('categoria.index') }}" class="btn btn-info">
                                <i class="bi bi-tag me-1"></i> Volver al inicio
                            </a> 
                            @if ($categoria->nombre != 'Varios')
                                <a href="{{ route('categoria.edit',$categoria) }}" class="btn btn-warning mx-2" title="Editar producto">
                                    <span class="bi bi-pencil"></span> Editar
                                </a>
                                <form action="{{ route('categoria.destroy',$categoria) }}" method="POST"class="d-inline deleteForm">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Borrar producto">
                                        <span class="bi bi-trash"></span> Borrar
                                    </button>
                                </form>
                            @endif
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mi-layout>
<script>
    document.querySelectorAll('.deleteForm').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
  
            Swal.fire({
                title: "¿Estás seguro?",
                text: "Se puede revertir esta acción accediendo a la papelera.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtontext: "Cancelar",
                confirmButtonText: "Sí, eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
  </script>      
