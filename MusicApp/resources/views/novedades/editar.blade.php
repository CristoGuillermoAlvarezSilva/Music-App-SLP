@guest
    @else
        @if(Auth::user()->id == $item->idR)
@extends('../layouts.app')

@section('title')
    Editar blog
@endsection


@section('content')
    <h3 class="card-body titulo-pags">Editar blog</h3>
   

    <div class="card">
    
   
    <form action="/novedades/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
        <div class="form-group col-4">
            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" class="form-control" value="{{$item->titulo}}">

        </div>
       
        <div class="form-group col-4">
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control" value="{{$item->descripcion}}">

        </div>
        <div class="form-group col-4">
            <label for="fecha">Fecha del evento:</label>
            <input type="date" name="fecha" class="form-control" value="{{$item->fecha}}">

        </div>
        <div class="form-group col-10">
            <label for="video">Video de Youtube</label>
            <input type="text" name="video" class="form-control" value="{{$item->video}}">

        </div>
       
       
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
    </div>
@endsection

@endif
        @endguest
