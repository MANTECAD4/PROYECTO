<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>VendiMarket - Inicio</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

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
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center">

        <div class="logo me-auto">
          <h1><a href="index.html">VendiMarket</a></h1>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">Registrate</a>
                    @endif
                @endauth
              @endif
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= inicio Section ======= -->
    <section id="inicio" class="d-flex flex-column justify-content-center align-items-center">
      <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Bienvenido a <span>VendiMarket</span></h1>
        <h2>Bienvenido a VendiMarket, donde la frescura y la variedad se encuentran en cada pasillo. Descubre tus sabores favoritos y abastece tu vida con lo mejor en abarrotes.
          ¡Satisfacemos tu gusto por la calidad!</h2>
        <a href="#about" class="btn-get-started scrollto">¡Empecemos!</a>
      </div>
    </section><!-- End inicio -->

    <main id="main">

      <!-- ======= What We Do Section ======= -->
      <section id="what-we-do" class="what-we-do">
        <div class="container">

          <div class="section-title">
            <h2>De Qué Se Trata</h2>
            <p>Ofrecemos calidad, frescura y un poco más en cada compra...</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class='bx bx-cart'></i></div>
                <h4><a href="">Servicio a domicilio</a></h4>
                <p>Recoge cómodamente tus compras en la puerta de tu casa</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-package"></i></div>
                <h4><a href="">Empaque personalizado</a></h4>
                <p>¡Personaliza tus compras con nosotros! Empacamos a la medida según tus deseos</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-crown"></i></div>
                <h4><a href="">Hazte premium</a></h4>
                <p>Subscríbete y ahorra: ¡Descuentos exclusivos y entregas prioritarias!</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End What We Do Section -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="{{asset('assets/vendor2/img/market.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <h3>Sobre Nosotros</h3>
              <p>
                ¡Bienvenido a VendiMarket! Nuestro rincón de abarrotes fusiona la frescura y calidad de los productos gourmet con la esencia de lo natural. Descubre una experiencia de compra única, donde lo auténtico se encuentra con lo contemporáneo.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i>Cientos de hogares confían en nosotros para llevar lo mejor a sus mesas en Guadalajara y más allá.</li>
                <li><i class="bx bx-check-double"></i>Garantizamos la calidad de nuestros productos seleccionando lo mejor de lo mejor de nuestros proveedores.</li>
              </ul>
              <div class="row icon-boxes">
                <div class="col-md-6 mt-4 mt-md-0">
                  <i class="bx bx-check-circle"></i>
                  <h4>Garantías</h4>
                  <p>En VendiMarket, tu satisfacción es lo más importante. Hemos establecido un sólido sistema de garantías para respaldar cada una de tus compras.</p>
                </div>
                <div class="col-md-6">
                  <i class="bx bx-certification"></i>
                  <h4>Certificados</h4>
                  <p>Contamos con la certificación de COFEPRIS. Esto significa que nuestros productos cumplen con los estándares
                    más altos de seguridad y calidad.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills">
        <div class="container">

          <div class="row skills-content">

            <div class="col-lg-6">

              <div class="progress">
                <span class="skill">Satisfacción<i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Compras recurrentes <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

            <div class="col-lg-6">

              <div class="progress">
                <span class="skill">Eco-Friendly <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Productos sin conservadores <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>

        </div>
      </section><!-- End Skills Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container">

          <div class="row">

            <div class="col-lg-3 col-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="1325" data-purecounter-duration="1" class="purecounter"></span>
                <p>Suscriptores felices</p>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="count-box">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span data-purecounter-start="0" data-purecounter-end="9281" data-purecounter-duration="1" class="purecounter"></span>
                <p>Ventas exitosas</p>
              </div>
            </div>

            <div class="col-lg-3 col-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-shop"></i>
                <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="1" class="purecounter"></span>
                <p>Surursales en GDL</p>
              </div>
            </div>

            <div class="col-lg-3 col-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
                <p>Integrantes del VendiTeam</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Counts Section -->

      <!-- ======= servicios Section ======= -->
      <section id="servicios" class="services section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Servicios</h2>
            <p>En VendiMarket contamos con los mejores servicios para consentir a nuestros clientes...</p>
          </div>

          <div class="row">
            <div class="col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-truck"></i>
                <h4><a href="#">Entregas a domicilio Express</a></h4>
                <p>Con nuestro servicio de Entrega a Domicilio Express, recibirás tus compras en cuestión de horas. Olvídate de las esperas y disfruta de la frescura y calidad de nuestros productos en la comodidad de tu hogar</p>
              </div>
            </div>
            <div class="col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-box2-heart"></i>
                <h4><a href="#">Kits personalizados</a></h4>
                <p>Creamos regalos y kits a medida para ti. Desde cestas elegantes hasta kits temáticos, personalizamos cada detalle para que sea único y significativo. Celebra ocasiones especiales o consiéntete con cada kit que hagas.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 ">
              <div class="icon-box">
                <i class="bi bi-shop-window"></i>
                <h4><a href="#">Degustaciones en tienda</a></h4>
                <p>Nuestras Degustaciones en Tienda te permiten probar los productos más nuevos y exclusivos antes de comprarlos. Descubre nuevos favoritos y disfruta de una experiencia sensorial única.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-heart-pulse"></i>
                <h4><a href="#">Consultoría nutricional</a></h4>
                <p>Ofrecemos consultoría de nutrición personalizada para ayudarte a tomar decisiones informadas sobre tus compras. Nuestros expertos te brindarán consejos y recomendaciones para una alimentación más saludable.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-gem"></i>
                <h4><a href="#">Programa de lealtad VIP</a></h4>
                <p>Únete a nuestro Programa de Lealtad VIP y disfruta de beneficios exclusivos. Desde descuentos adicionales hasta acceso anticipado a nuestras promociones, queremos agradecerte por ser parte de nuestra familia de clientes fieles.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-calendar4-week"></i>
                <h4><a href="#">Eventos</a></h4>
                <p>Organizamos cenas privadas y degustaciones exclusivas en nuestras instalaciones. Nuestros chefs prepararán platos gourmet con ingredientes de nuestra tienda, mientras tú y tus invitados disfrutan de una velada culinaria inolvidable.</p>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End servicios Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="section-title">
            <h2>Testimonios</h2>
            <p>¡Los integrantes de la VendiFamilia nos respaldan!</p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    No puedo estar más contento con mi experiencia de compra. Al entrar, fui recibido con una sonrisa y un servicio amable. La variedad de productos es impresionante y siempre encuentro lo que necesito. Además, el empaque personalizado de mis productos me hizo sentir realmente especial. ¡Definitivamente, mi tienda de abarrotes de confianza! 
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('assets/vendor2/img/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Pepe Pecas</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Como alguien que valora la calidad de los alimentos, esta tienda es mi paraíso. Los productos frescos y orgánicos son de primera calidad, y puedo confiar en que cada compra que hago aquí es una inversión en la salud de mi familia. La atención al cliente es excepcional, y siempre estoy bien asesorada sobre los productos. ¡Gracias por mantener los estándares tan altos!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('assets/vendor2/img/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Marcela Gozo</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Esta tienda no solo ofrece productos de alta calidad, sino que también brinda un servicio excepcional. El equipo siempre está dispuesto a ayudar y responder a mis preguntas sobre los productos. Además, su servicio de entrega a domicilio es un verdadero salvavidas en días ocupados. Definitivamente, mi primera elección para abarrotes.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('assets/vendor2/img/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Rosario Tijeras</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Amo cocinar y experimentar en la cocina, y esta tienda es mi refugio. Sus productos gourmet y especias exóticas me permiten llevar mis habilidades culinarias al siguiente nivel. El equipo de la tienda es conocedor y siempre me brinda consejos útiles. No puedo resistirme a sus aceites de oliva premium. ¡Un lugar de ensueño para los amantes de la cocina!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('assets/vendor2/img/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3>Armando Ramos</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Lo que más aprecio de esta tienda es la tranquilidad que me brinda. Sé que puedo confiar en la calidad de los productos, y su sistema de garantías me ha salvado en más de una ocasión. Además, el proceso de compra es fácil y rápido, y su servicio de entrega a domicilio es una comodidad que valoro mucho. Esta tienda ha hecho que mis compras sean sin preocupaciones.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{asset('assets/vendor2/img/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                  <h3>Johnny Bravo</h3>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" style="background-color:rgb(255, 255, 255)">
      <div class="footer-top section-bg">
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
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      </div>
      
    </footer>

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

  </body>
</html>
