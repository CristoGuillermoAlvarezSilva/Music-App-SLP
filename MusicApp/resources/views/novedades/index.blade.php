@extends('../layouts.app')
@section('title')
    Novedades
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Blog</h1>
    @guest

    @else
        <a class="btn btn-dark" type="button" href="/novedades/create">
            Agregar alguna novedad
        </a>
    @endguest


    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                @foreach($novedades as $item)
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                <div class="card-body">
                                    <div class="card-title">

                                        @foreach($representantes as $item2)
                                            @guest
                                                @else
                                                @if($item->idR == $item2->idU)


                                                    <ul class="tipo justify-content-center">{{$item2->nombre}}</ul>  

                                                @endif
                                            @endguest

                                        @endforeach 
                                        <ul class="tipo justify-content-center">Titulo:{{$item->titulo}}</ul>
                                        <ul class="tipo justify-content-center">Descripcion: {{$item->descripcion}}</ul>
                                        <?php
                                            $video_id = $item->video;
                                        ?>
   
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        
                                        <ul class="tipo justify-content-center">Fecha: {{$item->fecha}}</ul>
                                        
                                    </div>
                                </div>
                               
                                @guest
                                    @else
                                        @if(Auth::user()->id == $item->idR)
                                            <div class="d-flex">
                                                <a href="/novedades/{{$item->id}}/edit" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </div>
                                            <form action="/novedades/{{$item->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                Eliminar
                                                </button>
                                            </form>
                                        @endif
                                @endguest
                            </div>
                            
                        </div>
                    </div>
                @endforeach   
    </div>
@endsection




 