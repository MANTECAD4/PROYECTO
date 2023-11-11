<x-mi-layout>
    <div class="pagetitle">
        <h1>Historial Productos</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Logs</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Historial</h3>
                <p>Historial de gestión de los productos!</p>
                <!-- Table with stripped rows -->
                <div class="tabla-contenedor">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th >PRODUCTO</th>
                        <th >OPERACIÓN</th>
                        <th >EFECTUADA POR</th>
                        <th >FECHA REALIZACIÓN</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($registros as $registro)   
                        <tr>
                            <td >{{ $registro->producto->name}}</td>
                            <td>{{ $registro->operacion }}</td>
                            <td >{{ $registro->user->name }}</td>
                            <td>{{ $registro->fecha }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-mi-layout>