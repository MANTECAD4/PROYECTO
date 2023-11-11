<x-mi-layout>
    <div class="pagetitle">
        <h1>Papelera de productos</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item "><a href="{{route('producto.index')}}">Productos</a></li>
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
                <h3 class="card-title">Productos</h3>
                <p>Aquí se muestran los productos eliminados...</p>
                <!-- Table with stripped rows -->
                <div class="tabla-contenedor">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">FECHA ELIMINACIÓN</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($productos_borrados as $registro)   
                        <tr>
                            <td >{{ $registro->name}}</td>
                            <td >{{ $registro->descripcion }}</td>
                            <td >{{ $registro->deleted_at }}</td>
                            <td>
                                <form  action="{{route('producto.restore',$registro->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success" title="Restaurar producto">
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