@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
@extends('../layouts.app')

@section('title')
    Editar genero
@endsection


@section('content')
    <h3 class="card-body titulo-pags">Editar género</h3>
   
   <div class="card">
   
   
    <form action="/generos/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
    <div class="form-group col-4">
            <labe for="genero">Género</labe>
            <input type="text" name="genero" class="form-control" value="{{$item->genero}}">

        </div>
       
        <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">

        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
    </div>
@endsection

@endif
        @endguest
