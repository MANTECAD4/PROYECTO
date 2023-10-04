<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Productos</title>
        <!-- Agrega los enlaces a los archivos CSS de Bootstrap -->
        <link rel="stylesheet" href="{{asset('tabla/css/bootstrap.min.css')}}">
        <!-- Favicons -->
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

    </head>
    <body>
      @include('navbar')
      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Inventario de productos</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('producto.index')}}">Inventario</a></li>
              <li class="breadcrumb-item active">Dar de alta producto</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
        
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Example Card</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                        <!-- Floating Labels Form -->
                        <!-- /resources/views/post/create.blade.php -->
 
                        <h1>Create Post</h1>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <!-- Create Post Form -->
                        <form action="/producto" method="POST" class="row g-3">
                            @csrf <!-- Agrega el token CSRF -->
                            <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
                                <label for="nombre">Nombre</label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="{{old('marca')}}" required>
                                <label for="marca">Marca</label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoría" value="{{old('categoria')}}" required>
                                <label for="categoria">Categoría</label>
                            </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Descripción" id="descripcion" name="descripcion" style="height: 100px;">{{old('descripcion')}}</textarea>
                                    <label for="descripcion">Descripción</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            
                                <div class="form-floating">
                                <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio" value="{{old('precio')}}" required>
                                <label for="precio">Precio</label>
                                </div>
                            
                            </div>
                            <div class="col-md-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="unidades" name="unidades" placeholder="Unidades" step="1"  value="{{old('unidades')}}" required>
                                <label for="unidades">Unidades</label>
                            </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </form><!-- End floating Labels Form -->
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