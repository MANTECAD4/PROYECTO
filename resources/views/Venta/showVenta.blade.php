<x-mi-layout>
    <div class="pagetitle">
        <h1>Detalles de venta</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('venta.index')}}">Ventas</a></li>
            <li class="breadcrumb-item">Inspeccionar venta</li>
            <li class="breadcrumb-item active">{{$venta->id}}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Venta {{$venta->id}}</h2>
                    <p>Información de una venta en específico.</p>
                    <!-- Table with stripped rows -->
                    <div class="row">
                        <div class="col">   
                            <h3>Productos de la venta</h3>                                    
                            <table class="table datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">CANTIDAD</th>
                                    <th scope="col">SUBTOTAL</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($productos_venta as $producto_venta)   
                                    <tr>
                                        <td scope="row">{{ $producto_venta->producto->name }}</td>
                                        <td scope="row">{{ $producto_venta->producto->price }}</td>
                                        <td scope="row">{{ $producto_venta->cantidad }}</td>
                                        <td scope="row">{{ $producto_venta->subtotal }}</td>                
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="col">
                            <div class="portfolio-info">
                                <h3>Información de la venta</h3>
                                <ul>
                                    <li><strong>ID</strong>: {{ $venta->id }}</li>
                                    <li><strong>Venta realizada por: </strong>{{$venta->empleado->name}}</li>
                                    <li><strong>Cliente: </strong>{{$venta->cliente->name}}</li>
                                    <li><strong>Total de la venta: </strong>$ {{$venta->total}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center ">
                            <a href="{{ route('venta.index') }}" class="btn btn-info">
                                <i class="bi bi-cart me-1"></i> Volver al inicio
                            </a> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-mi-layout>
    
