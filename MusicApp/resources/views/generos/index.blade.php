@extends('../layouts.app')
@section('title')
    Generos musicales
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Generos</h1>
    @guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
        <!--Administrador-->
    <div class="d-flex justify-content-end mb-2">
        <a href="/generos/create" class="btn btn-primary">
            Agregar genero musical
        <i class="fas fa-plus"></i>
        </a>
    </div>
    
    @endif
        @endguest

    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                @foreach($generos as $item)
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                <img src="/{{$item->path}}" alt="" width="300px" height="250px">
                                <div class="card-body">
                                    <div class="card-title">
                                        <ul class="tipo justify-content-centerr">{{$item->genero}}</ul>
                                        <!--link para ir al genero especificado-->
                                    </div>
                                </div>
                                @guest
                                    @else
                                        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                            <div class="d-flex">
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
                                        @endif
                                @endguest
                            </div>
                            
                        </div>
                    </div>
                @endforeach   
    </div>
@endsection




 