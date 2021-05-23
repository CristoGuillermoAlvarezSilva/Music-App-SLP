
@extends('../layouts.app')
@section('title')
    Cotización
@endsection

@section('title')
    Music App
@endsection

@section('content')
<section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">
        <div class="section-title">
            <br>
            <h2>Cotización almacenada</h2>
            <p>Cotización</p>
            <h6 for="fecha">A continuación se encuentra la información de la cotización guardada</h6>
        </div>

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
            
            <div class="form-group col-12">
                <a class="btn btn-warning" href="/perfil">Volver</a>
            </div>

        </form>
    </div>
</section>
@endsection

