@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Representante</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Detalles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    @if($error != "")
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endif
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="/{{$item->path}}" class="img-fluid" alt="">
            <img src="/{{$item->path}}" class="img-fluid" alt="">
            <img src="/{{$item->path}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>{{$item->nombre}}</h3>
            <ul>
              <li><strong>Tipo</strong>: {{$item->tipo}}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Descripcion</h2>
          <p>
            {{$item->descripcion}}
          </p>
        </div>

      </div>
      
      <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
    </section><!-- End Portfolio Details Section -->
   

  
@endsection
