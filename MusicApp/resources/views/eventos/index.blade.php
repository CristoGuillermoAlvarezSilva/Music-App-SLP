@extends('../layouts.app')
@section('title')
    Eventos
@endsection


<!--Contenido de la pagina-->
@section('content')
<h1 class="card-body titulo-pags">Eventos</h1>
    @guest
    
    @else
        <a class="" href="/eventos/create">
            Agregar evento
        </a>
    @endguest


    <!--Todos usuarios-->
   <div class="categoria-item row py-5">
        
                @foreach($eventos as $item)
        
                <div class="categoria-item col-12 col-md-6 col-xl-3 pt-1 card eventos">
                        <div class="card-body">
                            <div >
                                <h3>{{$item->titulo}}</h3>
                                <p>{{$item->descripcion}}</p>
                                <p> <b>Lugar:</b>  {{$item->lugar}}</p>
                                <p> <b>Fecha:</b> {{$item->fecha}}</p>
                                <p>Hora: {{$item->hora}}</p>
                                <p>Costo: ${{$item->costo}}.00 mxn</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                        @guest
                                    @else
                                        @if(Auth::user()->id == $item->idR)
                                        <div class="d-flex flex-row">
                                            <div>
                                                <form action="/eventos/{{$item->id}}/edit">
                                                    <button class="boton-edit" type="submit">
                                                    Editar
                                                    </button>
                                                </form>
                                            </div>
                                            <div>
                                            <form action="/eventos/{{$item->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="boton-elim" type="submit">
                                                Eliminar
                                                </button>
                                            </form>
                                            </div>
                                        </div>   
                                        @endif
                                @endguest
                        </div>

                        <br>
                                
                </div>
                @endforeach   
    </div>
@endsection




 