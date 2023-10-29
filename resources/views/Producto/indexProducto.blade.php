<x-mi-layout>
  <div class="pagetitle">
    <h1>Inventario de productos</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Productos</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Datatables</h3>
            <p>Información de todos los productos registrados en la tienda. Haz click sobre el nombre un producto para inspeccionarlo!</p>
            <!-- Table with stripped rows -->
            <div class="tabla-contenedor">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">UNIDADES</th>
                    <th scope="col">MARCA</th>
                    <th scope="col">CATEGORÍA</th>
                    <th scope="col">CREATED_AT</th>
                    <th scope="col">UPDATED_AT</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($productos as $producto)   
                    <tr>
                        <td scope="row">{{ $producto->id }}</td>
                        <td>
                            <a href="{{route('producto.show',$producto)}}" title="Inspeccionar producto">
                                {{ $producto->name }}
                            </a>
                            <small class="d-block">{{ $producto->descripcion }}</small>
                        </td>
                        <td>${{ $producto->price }}</td>
                        <td>{{ $producto->unidades }}</td>
                        <td>{{ $producto->marca }}</td>                        
                        <td>{{ $producto->categoria->nombre}}</td>
                        <td>{{ $producto->created_at }}</td>
                        <td>{{ $producto->updated_at }}</td>
                        <td><a href="{{route('producto.edit',$producto)}} " class="btn btn-warning" title="Editar producto"><span class="bi bi-pencil"></span></a></td>
                        <td>
                          <form action="{{route('producto.destroy',$producto)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Borrar producto">
                              <span class="bi bi-trash"></span>
                            </button>
                          </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
              
            <!-- End Table with stripped rows -->
            <div class="text-center">
              <a type="button" href="{{route('producto.create')}}" class="btn btn-outline-primary mx-auto"><i class="bi bi-plus-square me-2"></i>Dar de alta producto</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-mi-layout>
    