<x-mi-layout>
    <div class="pagetitle">
        <h1>Papelera de categorias</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
            <li class="breadcrumb-item "><a href="{{route('categoria.index')}}">Categorías</a></li>
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
                <h3 class="card-title">Categorías</h3>
                <p>Aquí se muestran las categorías eliminadas...</p>
                <!-- Table with stripped rows -->
                <div class="tabla-contenedor">
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">CATEGORÍA</th>
                        <th scope="col">DESCRIPCIÓN</th>
                        <th scope="col">FECHA ELIMINACIÓN</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categorias_borradas as $registro)   
                        <tr>
                            <td >{{ $registro->nombre}}</td>
                            <td >{{ $registro->descripcion }}</td>
                            <td >{{ $registro->deleted_at }}</td>
                            <td>
                                <form  action="{{route('categoria.restore',$registro->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success" title="Restaurar categoria">
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