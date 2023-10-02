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
        <div class="bg-dark" style="height: 100vh; background: linear-gradient(to bottom, #f7f7f7, #67baff););">
          <form action="/producto" method="POST" class="my-auto h-100">
              @csrf <!-- Agrega el token CSRF -->
              <div class="container h-100 my-auto">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col">
                          <div class="card card-registration  p-4">
                              <div class="row g-0">
                                  <div class="col-xl-6 d-none d-xl-block">
                                  <img src="https://i.pinimg.com/564x/49/b3/a8/49b3a836a56f28cadbe2e171a42b5e2e.jpg"
                                      alt="Sample photo" class="img-fluid"
                                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                  </div>
                                  <div class="col-xl-6">
                                      <div class="card-body p-md-5 text-black">
                                          <h3 class="mb-5 text-uppercase">Registro Productos</h3>
                          
                                          <div class="row">
                                          <div class="col-md-6 mb-4">
                                              <div class="form-outline">
                                              <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" value="{{old('nombre')}}" required/>
                                              <label class="form-label" for="nombre">Nombre</label>
                                              </div>
                                          </div>
                                          <div class="col-md-6 mb-4">
                                              <div class="form-outline">
                                              <input type="text" id="marca" name="marca" class="form-control form-control-lg" value="{{old('marca')}}" required />
                                              <label class="form-label" for="marca">Marca</label>
                                              </div>
                                          </div>
                                          </div>
                          
                                          <div class="row">
                                          <div class="col-md-6 mb-4">
                                              <div class="form-outline">
                                              <input type="text" id="categoria" name="categoria" class="form-control form-control-lg" value="{{old('categoria')}}" required/>
                                              <label class="form-label" for="categoria">Categoría</label>
                                              </div>
                                          </div>
                                          <div class="col-md-6 mb-4">
                                              <div class="form-outline">
                                              <input type="number" id="precio" name="precio" class="form-control form-control-lg" step="0.01" value="{{old('precio')}}" required/>
                                              <label class="form-label" for="precio">Precio</label>
                                              </div>
                                          </div>
                                          <div class="col-md-6 mb-4">
                                              <div class="form-outline">
                                              <input type="number" step="1" min="1" id="unidades" name="unidades" class="form-control form-control-lg" value="{{old('unidades')}}" required/>
                                              <label class="form-label" for="unidades">Unidades existentes</label>
                                              </div>
                                          </div>
                                          </div>
                          
                                          <div class="form-outline mb-4">
                                              <textarea type="text" id="descripcion" name="descripcion" class="form-control form-control-lg" rows="4">{{old('descripcion')}}</textarea>
                                              <label class="form-label" for="descripcion">Descripción</label>
                                          </div>

                                          <div class="d-flex justify-content-left pt-3">
                                              <!--<button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                                              <button type=" submit" class="btn btn-lg shadow-sm" style="background-color: #013253; color:beige">Enviar formulario</button>
                                              <a href="{{route('producto.index')}}" class="btn btn-primary ml-3">Regresar</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
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