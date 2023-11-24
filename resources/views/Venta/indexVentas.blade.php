<x-mi-layout>
    <div class="pagetitle">
      <h1>Historial de ventas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
          <li class="breadcrumb-item active">Ventas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Registros</h3>
              <p>Historial de ventas de la tienda. Haz click sobre el id de una venta para más detalles!</p>
              <!-- Table with stripped rows -->
              <div class="tabla-contenedor">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ENCARGADO</th>
                      <th scope="col">CLIENTE</th>
                      <th scope="col">MONTO TOTAL</th>
                      <th scope="col">FECHA</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($ventas as $venta)   
                      <tr>
                          <td>
                              <a href="{{route('venta.show',$venta)}}" title="Inspeccionar venta">
                                  {{ $venta->id }}
                              </a>
                          </td>
                          <td>{{ $venta->empleado->name }}</td>
                          <td>{{ $venta->cliente->name }}</td>
                          <td>$ {{ $venta->total }}</td>
                          <td>{{ $venta->fecha }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-mi-layout>
      