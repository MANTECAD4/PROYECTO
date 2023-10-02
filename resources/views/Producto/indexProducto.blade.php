<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>Tabla productos</title>
  </head>
  <body>
    @include('navbar')
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Inventario de productos</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Inventario</li>
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
                                    {{ $producto->nombre }}
                                </a>
                                <small class="d-block">{{ $producto->descripcion }}</small>
                            </td>
                            <td>${{ $producto->precio }}</td>
                            <td>{{ $producto->unidades }}</td>
                            <td>{{ $producto->marca }}</td>                        
                            <td>{{ $producto->categoria }}</td>
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
    </main>
      
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
<!--https://mdbootstrap.com/docs/standard/forms/search-->
