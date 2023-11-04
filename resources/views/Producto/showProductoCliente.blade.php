<x-cliente-nav-bar>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Detalles del producto</h2>
              <ol>
                <li><a href="/cliente#portfolio">Inicio</a></li>
                <li>{{$producto->name}}</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <img src="/images/{{ $producto->image_path }}" alt="">
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Información de producto</h3>
                  <ul>
                    <li><strong>Precio</strong>: ${{$producto->price}}</li>
                    <li><strong>Marca</strong>: {{$producto->marca}}</li>
                    <li><strong>Categoría</strong>: {{$producto->categoria->nombre}}</li>
                    <li><strong>Unidades en stock</strong>: {{$producto->unidades}}</li>
                  </ul>
                </div>
                <div class="portfolio-description">
                  <h2>Descripción</h2>
                  <p>
                    {{$producto->descripcion}}
                  </p>
                  @if ($producto->unidades <=1)
                  <div class="card-footer text-center" style="background-color: white;"> 
                    <i class="bx bx-x mx-1"></i>
                    <p class="d-inline"> Sin inventario</p>
                </div>
                  @elseif (!\Cart::get($producto->id))
                      <form action="{{ route('cart.store') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" value="{{ $producto->id }}" id="id" name="id">
                          <input type="hidden" value="{{ $producto->name }}" id="name" name="name">
                          <input type="hidden" value="{{ $producto->price }}" id="price" name="price">
                          <input type="hidden" value="{{ $producto->image_path }}" id="img" name="img">
                          <input type="hidden" value="{{ $producto->unidades }}" id="unidades" name="unidades">
                          <input type="hidden" value="1" id="quantity" name="quantity">
                          <div class="card-footer" style="background-color: white;">
                              <div class="row">
                                  <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                      <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                  </button>
                              </div>
                          </div>
                      </form>
                  @else
                      <div class="card-footer text-center" style="background-color: white;"> 
                          <i class="bx bx-check mx-1"></i>
                          <p class="d-inline"> Item ya añadido</p>
                      </div>
                  @endif
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
      </main><!-- End #main -->
    
      <!-- ======= Footer ======= -->
      <footer id="footer">
    
        <div class="footer-top" style="background-color: white">
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
                  <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="index.html#inicio">Inicio</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="index.html#about">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="index.html#servicios">Servicios</a></li>
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
                <h4>BoostrapMade</h4>
                <p>Este proyecto fue estilizado usando los recursos del sitio web BootstrapMade. Checa el resto de sus plantillas!</p>
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
</x-cliente-nav-bar>