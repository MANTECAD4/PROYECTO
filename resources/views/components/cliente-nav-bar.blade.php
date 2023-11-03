<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VendiMarket - Inicio</title>
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
          <h1>VendiMarket</h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="/cliente#inicio">Inicio</a></li>
              <li><a class="nav-link scrollto" href="/cliente#about">About</a></li>
              <li><a class="nav-link scrollto" href="/cliente#servicios">Servicios</a></li>
              <li><a class="nav-link scrollto " href="/cliente#portfolio">Catálogo</a></li>
              <li><a class="nav-link scrollto" href="/cliente#testimonials">Testimonios</a></li>
              <li><a class="nav-link scrollto" href="/cliente#contact">Contacto</a></li>
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
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
          </div>
        </div>
    </header><!-- End Header -->
        <main id="main" class="main">
            {{$slot}}
        </main>
        <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>VendiMarket</h3>
            <p>
              Blvd. Gral. Marcelino García Barragán 1421<br>
              44430 Guadalajara, Jal.<br>
              México <br><br>
              <strong>Télefono:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#inicio">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#servicios">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Términos de servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Servicios relacionados</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Administración</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Venta al por mayor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Únete a Nuestro Boletín</h4>
            <p>Suscríbete a nuestro boletín y recibir las últimas noticias, ofertas exclusivas y actualizaciones directamente en tu bandeja de entrada.</p>
            <form action="#" method="get">
              <input type="email" name="email" placeholder="info@example.com"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>VendiMarket</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/VendiMarket-bootstrap-business-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


 <!-- Vendor JS Files -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor2/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor2/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor2/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/vendor2/main.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>
</html>