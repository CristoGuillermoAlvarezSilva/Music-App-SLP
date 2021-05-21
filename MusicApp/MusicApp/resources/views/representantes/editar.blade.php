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

<<<<<<< HEAD
    <form action="/representantes/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
        <img src="/{{$item->path}}" alt="" width="300px" height="250px">
        <div class="form-group col-2">
            <label for="nombre">{{$item->nombre}}</label>
            <label for="tipo">{{$item->tipo}}</label>
            <label for="des">{{$item->descripcion}}</label>
           
        </div>
        <?php
            $video_id = $item->video;
        ?>
        <div>
   
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </form>

    <form action="/cotizar" method="GET">

        <input type="text" name="idR" class="form-control" value="{{$item->idU}}" hidden>

        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Cotizar </button>
=======
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
>>>>>>> 1e70c187f1ed489c5912243e81c98dcfeba0ba07
        </div>

      </div>
      
      <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
        <p class="py-md-5"></p>
    </section><!-- End Portfolio Details Section -->
   

  
@endsection
