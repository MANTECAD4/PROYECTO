<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de producto</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('producto.index')}}">Productos</a></li>
            <li class="breadcrumb-item">Inspeccionar producto</li>
            <li class="breadcrumb-item active">{{$producto->name}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{$producto->name}}</h2>
                    <p>Información de un producto en específico.</p>
                    <!-- Table with stripped rows -->
                    <div class="row">
                        <div class="col">                                       
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/images/{{ $producto->image_path }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>           
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="portfolio-info">
                                <h3>Información de producto</h3>
                                <ul>
                                <li><strong>price</strong>: ${{$producto->price}}</li>
                                <li><strong>Marca</strong>: {{$producto->marca}}</li>
                                <li><strong>Categoría</strong>: {{$producto->categoria->name}}</li>
                                <li><strong>Unidades</strong>: {{$producto->unidades}}</li>
                                </ul>
                            </div>
                            <div class="portfolio-description">
                                <h2>Descripción</h2>
                                <p>
                                    {{$producto->descripcion}}
                                </p>
                            </div>
                            <div style="display: flex; justify-content: flex-start;">
                                <a href="{{ route('producto.index') }}" class="btn btn-info">
                                    <i class="bi bi-bag me-1"></i> Volver al inicio
                                </a> 
                                <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning mx-2" title="Editar producto">
                                    <span class="bi bi-pencil"></span> Editar
                                </a>
                                <form class="deleteForm" action="{{ route('producto.destroy', $producto) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Borrar producto">
                                        <span class="bi bi-trash"></span> Borrar
                                    </button>
                                </form>
                            </div>
                            
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
