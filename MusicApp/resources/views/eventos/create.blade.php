
@extends('../layouts.app')
@section('title')
    Eventos
@endsection

@section('title')
    Music App
@endsection

@section('content')


    <h3 class="card-body titulo-pags">Eventos</h3>
   

    <div class="card">
    <form action="/eventos" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
       
        <div class="form-group col-4">
            <labe for="titulo">Nombre del evento:</labe>
            <input type="text" name="titulo" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="descripcion">Descripcion del evento:</labe>
            <input type="text" name="descripcion" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="lugar">Lugar del evento:</labe>
            <input type="text" name="lugar" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="fecha">Fecha del evento:</labe>
            <input type="date" name="fecha" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="hora">Hora del evento:</labe>
            <input type="time" name="hora" class="form-control">

        </div>
        <div class="form-group col-4">
            <labe for="costo">Costo:</labe>
            <input type="text" name="costo" class="form-control">

        </div>
       
      
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>
    </form>

    </div>

@endsection

