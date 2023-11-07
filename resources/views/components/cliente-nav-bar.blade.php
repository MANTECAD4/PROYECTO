<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tianguis Digital - Inicio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor2/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/vendor2/style.css') }}" rel="stylesheet">

  <!--No quitar-->
  @livewireScripts
</head>

    <body>
          <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo me-auto">
          <h1>Tianguis Digital</h1>
        </div>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="/shop">Inicio</a></li>
              <li><a class="nav-link scrollto" href="/shop#about">About</a></li>
              <li><a class="nav-link scrollto" href="/shop#servicios">Servicios</a></li>
              <li><a class="nav-link scrollto " href="/shop#portfolio">Catálogo</a></li>
              <li><a class="nav-link scrollto" href="/shop#testimonials">Testimonios</a></li>
              <li><a class="nav-link scrollto" href="/shop#contact">Contacto</a></li>
              <li class="dropdown"><a href="#"><span>Mi perfil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    
                    <a  class="text-center" href="{{ route('cliente.edit',$cliente->id) }}">
                      <span>Ajustes de cuenta</span>
                    </a>
                  </li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                      @csrf
                      <a  class="text-center" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                          <span>Cerrar sesión</span>
                      </a>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <div class="header-social-links d-flex align-items-center">
            <a href="/cart" class="twitter"><i class="bi bi-cart"></i></a>
          </div>
        </div>
    </header><!-- End Header -->
        
      {{$slot}}  

    <script src="{{ asset('assets/vendor2/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor2/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assets/vendor2/main.js') }}"></script>

    </body>
</html>