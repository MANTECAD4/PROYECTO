<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de producto</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('producto.index')}}">Productos</a></li>
            <li class="breadcrumb-item">Inspeccionar producto</li>
            <li class="breadcrumb-item active">{{$producto->nombre}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{$producto->nombre}}</h2>
                    <p>Información de un producto en específico.</p>
                    <!-- Table with stripped rows -->
                    <div class="row">
                        <div class="col">                                       
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('assets/img/slides-1.jpg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/img/slides-2.jpg')}}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('assets/img/slides-3.jpg')}}" class="d-block w-100" alt="...">
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
                                <li><strong>Precio</strong>: ${{$producto->precio}}</li>
                                <li><strong>Marca</strong>: {{$producto->marca}}</li>
                                <li><strong>Categoría</strong>: {{$producto->categoria->nombre}}</li>
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
                                    <i class="bi bi-tag me-1"></i> Volver al inicio
                                </a> 
                                <a href="{{ route('producto.edit', $producto) }}" class="btn btn-warning mx-2" title="Editar producto">
                                    <span class="bi bi-pencil"></span> Editar
                                </a>
                                <form action="{{ route('producto.destroy', $producto) }}" method="POST">
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
    
