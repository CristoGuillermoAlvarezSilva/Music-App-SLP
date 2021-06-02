<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


   
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    

</head>
<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <!--<h1 class="logo"><a href="index.html">RecFilms<span>.</span></a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="assets/img/logo.jpg" class="img-fluid" ></a> 

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="/">Inicio</a></li>
          @guest
          @else
            @if(Auth::user()->rol == "super")
              <li><a href="/administrador"><i class="fas fa-cog"></i> Panel SuperUsuario</a></li>
              <li><a href="/eventos">Eventos</a></li>
              <li><a href="/pago">Subscribete</a></li>
            @endif
          @endguest
          @guest
            @else
              @if(Auth::user()->rol == "Administrador")
                <li><a href="/administrador"><i class="fas fa-cogs"></i> Panel Administrador</a></li>
                <li><a href="/eventos">Eventos</a></li>
                <li><a href="#">Subscribete</a></li>
              @endif
          @endguest
          
          <li><a href="/generos">Artistas</a></li>
          
          

        </ul>
      </nav><!-- .nav-menu -->
      @guest
      <a href="/register" class="get-started-btn scrollto"><i class="fas fa-user-plus"></i> Registrarse</a>
      <a href="/login" class="get-started-btn scrollto"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
      @else
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="drop-down"><a href=""><i class="far fa-user"></i> {{ Auth::user()->name }}</a>
              <ul>
              <li><a href="/perfil"><i class="fas fa-users-cog"></i> Perfil</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i><span>{{ __(' Cerrar sesión') }}</span></a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                
              </ul>
            </li>

        </ul>
      </nav><!-- .nav-menu -->
     @endguest
    </div>
  </header><!-- End Header -->

  
        @yield('content')
  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MusicAppSlp<span>.</span></h3>
              <p>
                UASLP <br>
                SLP<br><br>
                <strong>Telefono:</strong> +55 55555555<br>
                <strong>Correo:</strong> ServicioAlCliente@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Inscríbete con tu correo</h4>
            <p>Recibe novedades de los proximos eventos en SLP</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LSMXRecfilms</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>
