@extends('../layouts.app')
@section('title')
    Generos musicales
@endsection


<!--Contenido de la pagina-->
@section('content')
<h1 class="card-body titulo-pags">Géneros</h1>
    @guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
        <!--Administrador-->
    <div>
        <a href="/generos/create" class="">
            Agregar genero
        </a>
    </div>
    
    @endif
        @endguest

    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
        
                @foreach($generos as $item)
        
                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-1 card generos">
                    <div class="card-body">
                        <a href="/representantes/byName/{{$item->genero}}">
                        <div class="img-gens" style="background-image: url({{$item->path}});">
                            <div class="caja-gens"></div>
                            <div class="titulo-gens">
                                <span >{{$item->genero}}</span>
                                <!--link para ir al genero especificado-->
                            </div>
                        </div>
                        </a>       
                    </div>  

                    @guest
                                @else
                                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                    <div class="d-flex flex-row">  
                                        <div>
                                            <a href="/generos/{{$item->id}}/edit" class="btn btn-info">
                                                Editar
                                            </a>
                                        </div>
                                        <form action="/generos/{{$item->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                @endif
                        @endguest

                </div>
                @endforeach
    </div>
@endsection




 