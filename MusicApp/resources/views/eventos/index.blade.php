@extends('../layouts.app')
@section('title')
    Eventos
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Eventos</h1>
    @guest

    @else
        <a class="btn btn-dark" type="button" href="/eventos/create">
            Agregar Evento
        </a>
    @endguest


    <!--Todos usuarios-->
   <div class="categoria-items row py-5">

                @foreach($eventos as $item)
        
                    <div class="categoria-item col-12 col-md-3 pt-1">
                        <div class="car">
                            <div class="fon">
                                @foreach($representantes as $item2)
                                    @guest
                                        @else
                                            @if($item->idR == $item2->idU)


                                                <ul class="tipo justify-content-center">{{$item2->nombre}}</ul>
                                                <img src="/{{$item2->path}}" alt="" width="300px" height="250px">
                                                

                                        @endif
                                    @endguest

                                @endforeach 
                                <div class="card-body">
                                    <div class="card-title">
                                    
                                        <ul class="tipo justify-content-center">Titulo del evento:{{$item->titulo}}</ul>
                                        <ul class="tipo justify-content-center">Descripcion: {{$item->descripcion}}</ul>
                                        <ul class="tipo justify-content-center">Lugar: {{$item->lugar}}</ul>
                                        <ul class="tipo justify-content-center">Fecha: {{$item->fecha}}</ul>
                                        <ul class="tipo justify-content-center">Hora: {{$item->hora}}</ul>
                                        <ul class="tipo justify-content-center">Costo: {{$item->costo}}</ul>
                                    </div>
                                </div>
                               
                                @guest
                                    @else
                                        @if(Auth::user()->id == $item->idR)
                                            <div class="d-flex">
                                                <a href="/eventos/{{$item->id}}/edit" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </div>
                                            <form action="/eventos/{{$item->id}}" method="POST">
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




 