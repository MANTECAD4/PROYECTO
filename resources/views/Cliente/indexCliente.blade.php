<x-mi-layout>
    <div class="pagetitle">
      <h1>Registro de clientes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
          <li class="breadcrumb-item active">Clientes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    @if(Session::has('success'))
        <script>
          Swal.fire({
            title: "Restauración exitosa!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            timer: 3000,
          });
        </script>
      @endif
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Registros</h3>
              <p>Información de todos los clientes registrados en la tienda!</p>
              <!-- Table with stripped rows -->
              <div class="tabla-contenedor">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">TÉLEFONO</th>
                      <th scope="col">FECHA_NAC</th>
                      <th scope="col">GENERO</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">DIRECCIÓN</th>
                      @if (auth()->user()->type_user == 'administrador')
                        <th>ELIMINADA POR CLIENTE</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clientes as $cliente)   
                      <tr>
                          <td>{{ $cliente->id }}</td>
                          <td>{{ $cliente->user->name }}</td>
                          <td>{{ $cliente->telefono }}</td>
                          <td>{{ $cliente->fecha_nac }}</td>
                          <td>{{ $cliente->genero }}</td>                        
                          <td>{{ $cliente->user->email}}</td>
                          <td>{{ $cliente->direccion}}</td>
                          @if (auth()->user()->type_user == 'administrador')
                            <td>
                              @if ($cliente->deleted_at != null)
                                <div class="d-flex justify-content-center">
                                  <form  action="{{route('cliente.restore',$cliente->id)}}" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-success" title="Restaurar cliente">
                                        <span class="bx bx-revision"> Restaurar</span> 
                                      </button>
                                  </form>
                                </div>
                              @endif
                          </td>
                        @endif
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
      