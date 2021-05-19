@extends('../layouts.app')
@section('title')
    Calendario
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3>Calendario</h3>
   

    <form action="/calendarios" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <p>Disponible/Ocupado</p>

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
       
            <div class="form-group col-4">
                <labe for="fecha">Fecha:</labe>
                <input type="date" name="fecha" class="form-control">
            </div>
            <div class="form-group col-4">
                <label for="ocupado">Disponible/Ocupado</label>
                <select name="disp" class="form-control">
                    <option>Disponible</option>
                    <option>Ocupado</option>
                </select>

        </div>
            <div class="col-12 text-center">
                <button class="btn btn-success" type="submit">Crear</button>
            </div>
    </form>
@endsection

