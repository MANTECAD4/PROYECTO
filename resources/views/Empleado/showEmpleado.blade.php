<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de categoría</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('empleado.index')}}">Empleados</a></li>
            <li class="breadcrumb-item">Inspeccionar empleado</li>
            <li class="breadcrumb-item active">{{$empleado->nombre}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{$empleado->user->name}}</h2>
                    <p>Información de un empleado en específico.</p>
                    <!-- Table with stripped rows -->
                    <div class="row">
                        <div class="col">   
                            <h3>Ventas a nombre del vendedor</h3>                                    
                            <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">MONTO TOTAL</th>
                                    <th scope="col">FECHA</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($categoria->productos as $producto)   
                                    <tr>
                                        <td scope="row">{{ $producto->id }}</td>
                                        <td>
                                            <a href="{{route('producto.show',$producto)}}" title="Inspeccionar producto">
                                                {{ $producto->name }}
                                            </a>
                                        </td>
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
                            <a href="#" class="btn btn-warning mx-2" title="Editar producto">
                                <span class="bi bi-pencil"></span> Editar
                            </a>
                            <form action="#" method="POST"class="d-inline">
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
</x-mi-layout>
    
