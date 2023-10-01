<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('tabla/css/owl.carousel.min.css')}}">
        <!-- Style -->
    <link rel="stylesheet" href="{{asset('tabla/css/style.css')}}">

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
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Tablas</li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
       <div class="content">
        <div class="container">
          <div class="table-responsive">
            <table class="table table-striped custom-table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
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
                              <a class="more" href="{{route('producto.show',$producto)}}">
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
                          <td><a href="{{route('producto.edit',$producto)}} " class="more">EDITAR</a></td>
                          <td>
                            <form action="{{route('producto.destroy',$producto)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="more2" >ELIMINAR</button>
                            </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="text-center">
              <a href="{{route('producto.create')}}" class="btn  btn-lg shadow-sm mt-2" style="background: linear-gradient(to bottom, #67baff, #0186f3); color:beige">Nuevo producto</a>
            </div>
          </div>
        </div>
      </div> 
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
