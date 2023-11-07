<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shuffle Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor2/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor2/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        @if (Route::has('login'))

          @auth
            <div class="carousel-item active" style="background-image: url(assets/img/slide/sesion.jpg);">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">Bienvenido, <span>{{auth()->user()->name}}</span></h2>
                  <p class="animate__animated animate__fadeInUp">Sesión de {{auth()->user()->type_user}} abierta.</p>
                     @if(auth()->user()->type_user == 'administrador' or auth()->user()->type_user == 'vendedor')
                        <a href="{{ url('/inicio') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Entrar al sistema</a>
                      @else
                        <a href="{{ url('/cliente') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Entrar al sistema</a>
                      @endif 
                </div>
              </div>
            </div>
            
          @else
              <!-- Slide 1 -->
              <div class="carousel-item active" style="background-image: url(assets/img/slide/admin.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">Bienvenido, <span>ADMINISTRADOR</span></h2>
                    <p class="animate__animated animate__fadeInUp">Inicia sesión como administrador te dará acceso a la página administrativa donde se gestionan todos los procesos internos del negocio!</p>
                      <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Iniciar sesión</a>
                      <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Registrate</a>
                  </div>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="carousel-item active" style="background-image: url(assets/img/slide/cliente.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">Bienvenido, <span>CLIENTE</span></h2>
                    <p class="animate__animated animate__fadeInUp">Inicia sesión como cliente te dará acceso a la página donde los clientes ven los productos!</p>
                        <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Iniciar sesión</a>

                        <a href="{{route('cliente.create')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Registrate</a>
                  </div>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="carousel-item active" style="background-image: url(assets/img/slide/vendedor.jpg);">
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">Bienvenido, <span>VENDEDOR</span></h2>
                    <p class="animate__animated animate__fadeInUp">Inicia sesión como vendedor te dará acceso a la página administrativa donde se gestionan los principales procesos internos del negocio!</p>
                        <a href="{{ route('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Iniciar sesión</a>
                  </div>
                </div>
              </div>
          @endauth 
        @endif

          


        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
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
    <script src="{{ asset('assets/js/main2.js') }}"></script>

  <!-- Template Main JS File -->


</body>

</html>