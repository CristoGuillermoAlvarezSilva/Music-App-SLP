@extends('../layouts.app')
@section('title')
    Calendario
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3>Calendario</h3>
   

    <form action="/eventos" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <p>Crea un calendario para tu banda</p>

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
       
      
            <div class="col-12 text-center">
                <button class="btn btn-success" type="submit">Crear</button>
            </div>
    </form>
@endsection

