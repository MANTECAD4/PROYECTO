<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de categoría</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('empleado.index')}}">Empleados</a></li>
            <li class="breadcrumb-item">Inspeccionar empleado</li>
            <li class="breadcrumb-item active">{{$empleado->user->name}}</li>
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
                            <h3>Ventas efectuadas por el vendedor</h3>                                    
                            <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">CLIENTE</th>
                                    <th scope="col">MONTO TOTAL</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($empleado->ventas as $venta)   
                                    <tr>
                                        <td scope="row">{{ $venta->id }}</td>
                                        <td>{{ $venta->cliente->name }}</td>
                                        <td>${{ $venta->total }}</td>                     
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="col">
                            <div class="portfolio-info">
                                <h3>Información del empleado</h3>
                                <ul>
                                    <li><strong>ID</strong>: {{ $empleado->id }}</li>
                                    <li><strong>Nombre</strong>: {{$empleado->user->name}}</li>
                                    <li><strong>Télefono</strong>: {{ $empleado->telefono }}</li>
                                    <li><strong>Dirección</strong>: {{ $empleado->direccion }}</li>
                                    <li><strong>Fecha de nacimiento: </strong>: {{ $empleado->fecha_nac }}</li>
                                    <li><strong>Correo</strong>: {{ $empleado->user->email }}</li>
                                    <li><strong>Sueldo</strong>: ${{ $empleado->sueldo }}</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="text-center ">
                            <a href="{{ route('empleado.index') }}" class="btn btn-info">
                                <i class="bi bi-person-badge me-1"></i> Volver al inicio
                            </a> 
                            @if(auth()->user()->type_user == 'administrador')
                                <a href="{{ route('empleado.edit',$empleado) }}" class="btn btn-warning mx-2" title="Editar producto">
                                    <span class="bi bi-pencil"></span> Editar
                                </a>
                                <form action="#" method="POST"class="d-inline">
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
    
