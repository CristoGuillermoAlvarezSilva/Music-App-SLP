@extends('../layouts.app')
@section('title')
    Artistas
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Artistas</h1>


    <!--Todos los artistas-->
   <div class="categoria-items row py-5">

                @foreach($representantes as $item)
                    @guest
                        @else
                            @if($item->genero == $genero)
                                <div class="categoria-item col-12 col-md-3 pt-1">
                                    <div class="car">
                                        <div class="fon">
                                            <img src="/{{$item->path}}" alt="" width="300px" height="250px">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <ul class="tipo justify-content-centerr">{{$item->nombre}}</ul>
                                                    <!--link para ir al genero especificado-->
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex">
                                                <a href="/representantes/{{$item->id}}/edit" class="btn btn-info">
                                                  Ver
                                                </a>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                        @endif
                    @endguest
                @endforeach   
    </div>
@endsection
