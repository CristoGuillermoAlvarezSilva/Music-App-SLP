
@extends('../layouts.app')
@section('title')
    Cotización
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3>Corización</h3>
   

    <form action="/cotizaciones" class="form-row" enctype="multipart/form-data">
        @csrf
       
           
        <div class="form-group col-4">
            <label for="descripcion">Numero de personas:</label>
            <input type="text" name="descripcion" class="form-control" value="{{$item->num}}" readonly>

        </div>
        <div class="form-group col-4">
            <label for="titulo">Cotización: </label>
            <input type="text" name="titulo" class="form-control" value="{{$item->cotizacion}}" readonly>

        </div>
       
        <div class="form-group col-4">
            <label for="fecha">Anticipo:</label>
            <input type="text" name="text" class="form-control" value="{{$item->anticipo}}" readonly>

        </div>
        
      
        <h3><a href="/perfil">Volver</a></h3>

    </form>
@endsection

