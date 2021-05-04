@guest
    @else
        @if(Auth::user()->id == $item->idR)
@extends('../layouts.app')

@section('title')
    Editar evento
@endsection


@section('content')
    <h3 class="card-body titulo-pags">Editar evento</h3>

    <div class="card">
   
    <form action="/eventos/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
        <div class="form-group col-4">
            <labe for="titulo">Nombre del evento: </labe>
            <input type="text" name="titulo" class="form-control" value="{{$item->titulo}}">

        </div>
       
        <div class="form-group col-4">
            <labe for="descripcion">Descripcion del evento:</labe>
            <input type="text" name="descripcion" class="form-control" value="{{$item->descripcion}}">

        </div>
        <div class="form-group col-4">
            <labe for="lugar">Lugar del evento:</labe>
            <input type="text" name="lugar" class="form-control" value="{{$item->lugar}}">

        </div>
        <div class="form-group col-4">
            <labe for="fecha">Fecha del evento:</labe>
            <input type="date" name="fecha" class="form-control" value="{{$item->fecha}}">

        </div>
        <div class="form-group col-4">
            <labe for="hora">Hora del evento:</labe>
            <input type="time" name="hora" class="form-control" value="{{$item->hora}}">

        </div>
        <div class="form-group col-4">
            <labe for="costo">Costo:</labe>
            <input type="text" name="costo" class="form-control" value="{{$item->costo}}">

        </div>
       
      
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
    </div>
@endsection

@endif
        @endguest
