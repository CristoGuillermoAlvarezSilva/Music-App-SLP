extends('../layouts.app')
@section('title')
    Cotizaciones
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3>Cotizaciones</h3>
   

    <form action="/cotizaciones" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <p>Cotizar </p>

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
       
          
            <!--Para mostrar el representante seleccionado-->
            <?php
            $m = $_GET['idR'];
           
            ?>
       
            <div class="col-12 text-center">
                <button class="btn btn-success" type="submit">Crear</button>
            </div>
    </form>
@endsection

