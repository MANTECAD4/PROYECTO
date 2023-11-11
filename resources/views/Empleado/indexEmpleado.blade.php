<x-mi-layout>
    <div class="pagetitle">
      <h1>Registro de empleados</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
          <li class="breadcrumb-item active">Empleados</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <!--Notificaciones de CRUD-->
    @include('partials.notificaciones')

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Registros</h3>
              <p>Información de todos los empleados registrados en la tienda. Haz click sobre el nombre un empleado para inspeccionarlo!</p>
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
                      @if(auth()->user()->type_user == 'administrador')
                        <th scope="col">SUELDO</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($empleados as $empleado)   
                      <tr>
                          <td scope="row">{{ $empleado->id }}</td>
                          <td>
                            @if(auth()->user()->type_user == 'administrador')
                              <a href="{{route('empleado.show',$empleado)}}" title="Inspeccionar empleado">
                                  {{ $empleado->user->name }}
                              </a>
                            @elseif(auth()->user()->type_user == 'vendedor')
                              {{ $empleado->user->name }}
                            @endif
                          </td>
                          <td>{{ $empleado->telefono }}</td>
                          <td>{{ $empleado->fecha_nac }}</td>
                          <td>{{ $empleado->genero }}</td>                        
                          <td>{{ $empleado->user->email}}</td>
                          
                          @if(auth()->user()->type_user == 'administrador')
                            <td>${{ $empleado->sueldo}}</td>
                            @if ($empleado->user->email == 'vendedor@gmail.com')
                              <td><span class="bi bi-x btn btn-warning" title="No es posible editar a este empleado"></span></td>
                              <td><span class="bi bi-x btn btn-danger" title="No es posible borrar este empleado"></span></td>
                            @else
                              <td><a href="{{route('empleado.edit',$empleado)}} " class="btn btn-warning" title="Editar empleado"><span class="bi bi-pencil"></span></a></td>
                              <td>
                                <form class="deleteForm"action="{{route('empleado.destroy',$empleado)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" title="Borrar empleado">
                                    <span class="bi bi-trash"></span>
                                  </button>
                                </form>
                              </td>
                            @endif
                          @endif
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                
              <!-- End Table with stripped rows -->
              @if(auth()->user()->type_user == 'administrador')
                <div class="text-center">
                  <a type="button" href="{{route('empleado.create')}}" class="btn btn-outline-primary mx-auto"><i class="bi bi-plus-square me-2"></i>Dar de alta empleado</a>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
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