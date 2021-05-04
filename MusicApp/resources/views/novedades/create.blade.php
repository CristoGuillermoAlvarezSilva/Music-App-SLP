@extends('../layouts.app')
@section('title')
    Blog
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3 class="card-body titulo-pags">Blog</h3>
   
    <div class="card">
    
   

    <form action="/novedades" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
       
        <div class="form-group col-4">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" class="form-control">

        </div>
        <div class="form-group col-4">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" class="form-control">

        </div>
       
        <div class="form-group col-4">
            <label for="fecha">Fecha del evento:</label>
            <input type="date" name="fecha" class="form-control">

        </div>
        <div class="form-group col-10">
            <label for="video">Video de Youtube</label>
            <input type="text" name="video" class="form-control">

        </div>

        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>

    </div>
@endsection

