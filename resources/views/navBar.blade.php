<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">VendiMarket</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
        <a class="nav-link nav-icon" href="https://facebook.com/" target="_blank">
            <i class="bi bi-facebook"></i>
        </a><!-- End Notification Icon -->
        <a class="nav-link nav-icon" href="https://twitter.com/" target="_blank">
            <i class="bi bi-twitter"></i>
        </a><!-- End Notification Icon -->
        <a class="nav-link nav-icon" href="https://www.instagram.com/" target="_blank">
            <i class="bi bi-instagram"></i>
        </a><!-- End Notification Icon -->
        <a class="nav-link nav-icon" href="https://mx.linkedin.com/" target="_blank">
            <i class="bi bi-linkedin"></i>
        </a><!-- End Notification Icon -->
        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('assets/img/gato.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Ñ. Martínez</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>Ñañel Martínez</h6>
                <span>Web Designer</span>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Ajustes de cuenta</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Ayuda</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesión</span>
                </a>
            </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">


    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-tag"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
        <a href="{{route('producto.index')}}">
            <i class="bi bi-circle"></i><span>Ver productos</span>
        </a>
        </li>
        <li>
        <a href="{{route('producto.create')}}">
            <i class="bi bi-circle"></i><span>Dar de alta productos</span>
        </a>
        </li>
    </ul>
    </li><!-- End Productos Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <i class="bi bi-person"></i>
        <span>Perfil</span>
    </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
    </a>
    </li><!-- End Login Page Nav -->

    <li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
    </a>
    </li><!-- End Error 404 Page Nav -->


</ul>

</aside><!-- End Sidebar-->