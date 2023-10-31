<x-mi-layout>
    <div class="pagetitle">
        <h1>Historial Productos</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <p>Historial de modificaciones de los productos</p>
                <!-- Table with stripped rows -->
                <div class="tabla-contenedor">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">EDITADO POR</th>
                        <th scope="col">UPDATED_AT</th>
                        <th scope="col">PRODUCTO</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($registros as $registro)   
                        <tr>
                            <td scope="row">{{ $registro->user->name}}</td>
                            <td scope="row">{{ $registro->updated_at }}</td>
                            <td scope="row">{{ $registro->producto->name }}</td>
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