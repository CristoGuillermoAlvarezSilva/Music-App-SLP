@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
    @if($error != "")
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endif

    <section id="services" class="services">

    <div class="container centrar" data-aos="fade-up">

            <div>
                <form action="/representantes/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class='row '>
                            <div class="col-12 section-title">
                                <br>
                                <h2>{{$item->tipo}} </h2>
                                <p>{{$item->nombre}}</p>
                            </div>

                            <div class='col-12 section-title'>
                                <img src="/{{$item->path}}" alt="" width="300px" height="250px">
                                <br><br><br>
                                <h5 for="des">{{$item->descripcion}}</h1>
                            </div>
                            
                            <?php
                                $video_id = $item->video;
                            ?>

                            <div class="col-12 section-title">
                                <h6>Si quieres conocer la banda o artista, ve el siguiente video</h6><br>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                </form>

                

                <form action="/cotizar" method="GET">
                    <input type="text" name="idR" class="form-control" value="{{$item->idU}}" hidden>
                    <div class="col-12 text-center">

                        <a href="/calendarios" class="btn btn-warning">Ir a Agenda</a><br><br>
                        <button class="btn btn-warning" type="submit">Cotizar evento</button>
                    </div>
                </form>

            </div>
    </div>
    
    </section>
    
  
@endsection
