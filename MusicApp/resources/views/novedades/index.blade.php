@extends('../layouts.app')
@section('title')
    Novedades
@endsection


<!--Contenido de la pagina-->
@section('content')
<h1 class="card-body titulo-pags">Blog</h1>
    @guest

    @else
        <a class="" href="/novedades/create">
            Agregar noticia
        </a>
    @endguest


    <!--Todos usuarios-->
    <div class="categoria-items row py-5">
        
                @foreach($novedades as $item)
        
                    <div class="categoria-item col-12 col-xs-12 col-sm-12 col-md-12 pt-1 card novedad">
                        <div class="card-body ">
                            <div>
                                    @foreach($representantes as $item2)
                                            @guest
                                                @else
                                                @if($item->idR == $item2->idU)


                                                    <h3 class="tipo justify-content-center">{{$item2->nombre}}</h3>  

                                                @endif
                                            @endguest

                                    @endforeach 
                                <h5 class="card-title fondonegro ">{{$item->titulo}}</h5>
                                <ul class="card-text fondonegro">{{$item->descripcion}}</ul>
                                <?php
                                    $video_id = $item->video;
                                ?>  
                            </div>
                            <div class="card-img-bot"> 
                                <iframe src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <ul class="card-text fondonegro"> Publicado el<b>  {{$item->fecha}}</b></ul>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            @guest
                                    @else
                                        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                        <div class="d-flex flex-row">
                                            <div>
                                                <form action="/novedades/{{$item->id}}/edit">
                                                    <button class="boton-edit" type="submit">
                                                    Editar
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                            <form action="/novedades/{{$item->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="boton-elim" type="submit">
                                                    Eliminar
                                                </button>
                                            </form>
                                            <br>
                                            </div>
                                        </div>   
                                        @endif
                            @endguest
                        </div>
                    
                    </div>
                @endforeach   
    </div>
@endsection




 