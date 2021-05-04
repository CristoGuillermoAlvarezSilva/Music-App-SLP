@extends('../layouts.app')
@section('title')
    Artistas
@endsection


<!--Contenido de la pagina-->
@section('content')
<h1 class="card-body titulo-pags">Artistas</h1>

    <!--Todos los artistas-->
   <div class="categoria-items row py-5">

                @foreach($representantes as $item)
                    @guest
                        @else
                            @if($item->genero == $genero)
                                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-1 card artistas">
                                    <div class="card-body">
                                        <a href="/representantes/{{$item->id}}/edit">
                                            <div class="img-gens">
                                                <img src="/{{$item->path}}" class="img-gens">
                                                <div class="caja-gens">
                                                    <div class="titulo-gens">
                                                        <span class="tipo justify-content-centerr">{{$item->nombre}}</span>
                                                        <!--link para ir al genero especificado-->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                        @endif
                    @endguest
                @endforeach   
    </div>
@endsection
