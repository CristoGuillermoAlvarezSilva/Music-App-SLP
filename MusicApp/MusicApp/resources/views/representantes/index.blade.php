@extends('../layouts.app')
@section('title')
    Artistas
@endsection


<!--Contenido de la pagina-->
@section('content')

<!-- ======= Portfolio Section ======= -->
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                <h2>Grupos/Artistas</h2>
                <p class="text-white">Conoce los artistas </p>
                </div>
            </div>
            </section><!-- End Contact Section -->

        </section>
    </div>

    <div class="col-6">

<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
                    <p class="py-md-5"></p>
                    @guest
                    <h2>Disponibles </h2>
                    @else
                        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                        <!--Administrador-->
                    <h2>SuperUsuario </h2>
                    
                    @endif
                        @endguest
                
                <p>Grupos</p>
        
        </div>

        

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($representantes as $item)
            @if($item->genero == $genero)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/{{$item->path}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$item->nombre}}</h4>
                <p>{{$item->tipo}}</p>
                <div class="portfolio-links">
                  <a href="/{{$item->path}}" data-gall="portfolioGallery" class="venobox" title="Zoom"><i class="bx bx-zoom-in"></i></a>
                  <a href="/representantes/{{$item->id}}/edit" title="Mas detalles"><i class="bx bx-link"></i></a>
                    </div>
                </div>
                </div>
            </div>
            @endif
                    
        @endforeach   
          


        </div>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>

      </div>
    </section><!-- End Portfolio Section -->

</div></div></div>





@endsection
