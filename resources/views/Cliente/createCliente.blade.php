<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Login - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>
        <main>
            <div class="container">
                <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="card col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                                <div class="d-flex justify-content-center logo d-flex align-items-center w-auto py-4 my-4">
                                        <img src="assets/img/logo.png" alt="">
                                        <span class="d-none d-lg-block">Crea una cuenta de cliente</span>
                                </div><!-- End Logo -->
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
                            <form action="{{ route('cliente.store') }}" method="POST" class="row g-3">
                                @csrf <!-- Agrega el token CSRF -->
        
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
                                        <label for="nombre">Nombre</label>
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Télefono" value="{{old('telefono')}}" required>
                                        <label for="telefono">Télefono</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{old('correo')}}" required>
                                        <label for="correo">Correo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="fecha_nac" class="col-sm-4  col-form-label">Fecha Nac.</label>
                                        <div class="col">
                                            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" value="{{old('fecha_nac')}}"required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Género</label>
                                        <div class="col">
                                            <select class="form-select" id="genero" name="genero" aria-label="Default select example" required>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                        </div>
                                </div>
        
        
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{old('direccion')}}" required>
                                        <label for="direccion">Dirección</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña"  required>
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirma contraseña"  required>
                                        <label for="password2">Confirma contraseña</label>
                                    </div>
                                </div>
                                
                                
                                <div class="text-center my-4">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Guardar</button>
                                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                                    <a href="/" class="btn btn-light">Volver</a>
                                </div>
                            </form><!-- End floating Labels Form -->
                                

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main><!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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