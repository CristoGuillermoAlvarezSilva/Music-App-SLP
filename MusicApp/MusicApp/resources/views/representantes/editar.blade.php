@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
    <h3>Representante</h3>
    
    @if($error != "")
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endif

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


        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>

  
@endsection