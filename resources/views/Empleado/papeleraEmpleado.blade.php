<x-mi-layout>
    <div class="pagetitle">
        <h1>Papelera de empleados</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item "><a href="{{route('empleado.index')}}">Empleados</a></li>
            <li class="breadcrumb-item active">Papelera</li>
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
                <h3 class="card-title">Empleados</h3>
                <p>Aquí se muestran las cuentas de empleado eliminadas...</p>
                <!-- Table with stripped rows -->
                <div class="tabla-contenedor">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">EMPLEADO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">FECHA ELIMINACIÓN</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($empleados_borrados as $registro)   
                        <tr>
                            <td >{{ $registro->user->name}}</td>
                            <td >{{ $registro->user->email }}</td>
                            <td >{{ $registro->deleted_at }}</td>
                            <td>
                                <form  action="{{route('empleado.restore',$registro->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success" title="Restaurar empleado">
                                    <span class="bx bx-revision"> Restaurar</span> 
                                    </button>
                                </form>
                            </td>
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