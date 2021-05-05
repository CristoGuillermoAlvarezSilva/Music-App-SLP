@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
@extends('../layouts.app')
@section('title')
    Generos musicales
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3 class ="card-body titulo-pags">Géneros Musicales</h3>
   

    <div class="card">
    
    <form action="/generos" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group col-4">
            <labe for="genero">Género</labe>
            <input type="text" name="genero" class="form-control">

        </div>
       
        <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">

        </div>
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
    </div>
@endsection

@endif
        @endguest