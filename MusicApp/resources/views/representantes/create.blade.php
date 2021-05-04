@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
    
   
    <div class="card">

    <h3>Registrar solista/grupo</h3>
    <br>

        <form action="/representantes" class="form-row" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
        
                <input type="text" name="idU" class="form-control" value="{{Auth::user()->id}}" hidden>

            <div class="form-group col-4">
                <label for="tipo">Solista o Agrupación</label>
                <select name="tipo" class="form-control">
                        <option>Solista</option></option>
                        <option >Agrupación</option>
                </select>

            </div>
            <div class="form-group col-4">
                <label for="nombre">Nombre Banda/Solista</label>
                <input type="text" name="nombre" class="form-control">

            </div>
            <div class="form-group col-4">
                <label for="genero">Genero Musical</label>
                <select name="genero" class="form-control">
                @foreach($generos as $genero)
                    <option value="{{$genero->genero}}">{{$genero->genero}}</option>
                @endforeach
                </select>

            </div>
            <div class="form-group col-4">
                <label for="nombre">Descripción</label>
                <input type="text" name="descripcion" class="form-control">

            </div>
        
            <div class="form-group col-10">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">

            </div>
            <div class="form-group col-10">
                <label for="video">Video de Youtube</label>
                <input type="text" name="video" class="form-control">

            </div>
            <div class="col-12 text-center">
                <button class="boton-gral" type="submit">Guardar</button>
            </div>
        </form>
        <br>
    </div>

    
@endsection