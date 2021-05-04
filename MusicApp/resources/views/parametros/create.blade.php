@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
    <h3 class="card-body titulo-pags">Parametros</h3>
   
    <div class="card">
    
    <form action="/parametros" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
       
        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>

       
        <div class="form-group col-4">
            <label for="precioBase">Precio Base</label>
            <input type="text" name="precioBase" class="form-control">
            <label for="personasBase">Numero de personas Base</label>
            <input type="text" name="personasBase" class="form-control">

        </div>

        <div class="form-group col-4">
            <label for="precioMedio">Precio Medio</label>
            <input type="text" name="precioMedio" class="form-control">
            <label for="personasMedio">Numero de personas Medio</label>
            <input type="text" name="personasMedio" class="form-control">

        </div>
        <div class="form-group col-4">
            <label for="precioAlto">Precio Alto</label>
            <input type="text" name="precioAlto" class="form-control">
            <label for="personaA">Numero de personas Alto</label>
            <input type="text" name="personasAlto" class="form-control">

        </div>
        <div class="form-group col-4">
            <label for="precioMax">Precio Maximo</label>
            <input type="text" name="precioMax" class="form-control">
            <label for="personasMax">Numero de personas Maximo</label>
            <input type="text" name="personasMax" class="form-control">

        </div>

        <div class="form-group col-4">
            <label for="anticipo">Porcentaje de Anticipo</label>
            <input type="text" name="anticipo" class="form-control">
            

        </div>
        
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>
    </div>
@endsection