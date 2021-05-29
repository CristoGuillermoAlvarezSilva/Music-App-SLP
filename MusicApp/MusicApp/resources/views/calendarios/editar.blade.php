@extends('../layouts.app')
@section('title')
    Calendario
@endsection

@section('title')
    Music App
@endsection

@section('content')
<section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">
        <div class="section-title">
            <br>
            <h2>Calendario</h2>
           
        </div>
        <label>Actualizar Fecha</label>
        <form action="/calendarios/{{$item->id}}" class="form-row"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
           
                <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
                <input type="text" name="disp" class="form-control" value="Ocupado" hidden>
                    <div class="form-group col-4">
                        <label for="fecha">Fecha ocupada</label>
                        <input type="date" name="fecha" class="form-control" value="{{$item->fecha}}">
                    </div>
                    <div class="form-grup col-4">
                        <label for="inicio">Inicio</label>
                        <input type="time" name="inicio" class="form-control" value="{{$item->inicio}}">

                    </div>
                    <div class="form-grup col-4">
                        <label for="fin">Fin</label>
                        <input type="time" name="fin" class="form-control" value="{{$item->fin}}">
                                
                    </div>
            
            <div class="col-12 text-center">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>

        </form>
    </div>
</section>
@endsection

