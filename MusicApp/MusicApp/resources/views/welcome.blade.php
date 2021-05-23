@extends('./layouts.app')

@section('title')
  Inicio
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>LSMX  RecFilms<span>.</span></h1>
          <h2>La música es la vida emocional de la mayoría de la gente<span>.</span></h2>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        @guest
        @else
        <div class="col-xl-2 col-md-4 col-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="/parametros">Contratar</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 ">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="/representantes/create">Registra tu Grupo</a></h3>
          </div>
        </div>
        @endguest
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="/eventos">Calendario de eventos</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Subscribete</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
          <div class="icon-box">
            <i class="far fa-comment-dots"></i>
            <h3><a href="/calendarios">Calendario</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section>
  
  
  <!-- End Hero -->

  <main id="main" class="bg-black">
     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Subscribete</h3>
          <p> Accede a los beneficios de AppMusic y logra inscribir tu grupo para organizar eventos,darte a conocer, y obtener ingresos por contratacion.</p>
          <a class="cta-btn" href="#">Subscripcion</a>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->
   

   

    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="" width="200" height="200">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="" width="200" height="200">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" width="200" height="200">
          </div>

          

        </div>

        

      </div>
    </section><!-- End Portfolio Details Section -->

    
    

    

  </main><!-- End #main -->
 
@endsection