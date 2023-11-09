<x-mi-layout>
    <div class="pagetitle">
      <h1>Categorías</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
          <li class="breadcrumb-item active">Categorías</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(Session::has('warning'))
        <div class="alert alert-warning alert-dismissible">
            {{ Session::get('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
            {{ Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Registros</h3>
              <p>Información de todas las categorías de la tienda. Haz click sobre el nombre para inspeccionarla!</p>
              <!-- Table with stripped rows -->
              <div class="tabla-contenedor">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">DESCRIPCIÓN</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categorias as $categoria)   
                      <tr>
                          <td scope="row">{{ $categoria->id }}</td>
                          <td>
                              <a href="{{route('categoria.show',$categoria)}}" title="Inspeccionar producto">
                                  {{ $categoria->nombre }}
                              </a>
                          </td>
                          <td>{{ $categoria->descripcion }}</td>
                          @if ($categoria->nombre == 'Varios')
                            <td><span class="bi bi-x btn btn-warning" title="No es posible editar esta categoria"></span></td>
                            <td><span class="bi bi-x btn btn-danger" title="No es posible borrar esta categoria"></span></td>
                          @else
                            <td><a href="{{route('categoria.edit',$categoria)}}" class="btn btn-warning" title="Editar categoría"><span class="bi bi-pencil"></span></a></td>
                            <td>
                              <form action="{{route('categoria.destroy',$categoria)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="Borrar categoria">
                                  <span class="bi bi-trash"></span>
                                </button>
                              </form>
                            </td>
                          @endif
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                
              <!-- End Table with stripped rows -->
              <div class="text-center">
                <a type="button" href="{{route('categoria.create')}}" class="btn btn-outline-primary mx-auto"><i class="bi bi-plus-square me-2"></i>Dar de alta categoría</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </x-mi-layout>
      