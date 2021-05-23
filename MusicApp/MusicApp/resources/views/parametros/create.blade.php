@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
<section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">

    <div class="section-title">
        <br>
        <h2>Guardado de parámetros</h2>
        <p>Parámetros</p>
        <h6 for="fecha">Establece los parámetros para cotizaciones</h6>
    </div>

    <form action="/parametros" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
    <div class="row ">
    <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>

        <div class="form-group col-3">
            <label for="precioBase">Precio Base</label>
            <input type="text" name="precioBase" class="form-control">
            <label for="personasBase">Numero de personas Base</label>
            <input type="text" name="personasBase" class="form-control">

        </div>

        <div class="form-group col-3">
            <label for="precioMedio">Precio Medio</label>
            <input type="text" name="precioMedio" class="form-control">
            <label for="personasMedio">Numero de personas Medio</label>
            <input type="text" name="personasMedio" class="form-control">

        </div>
        <div class="form-group col-3">
            <label for="precioAlto">Precio Alto</label>
            <input type="text" name="precioAlto" class="form-control">
            <label for="personaA">Numero de personas Alto</label>
            <input type="text" name="personasAlto" class="form-control">

        </div>
        <div class="form-group col-3">
            <label for="precioMax">Precio Maximo</label>
            <input type="text" name="precioMax" class="form-control">
            <label for="personasMax">Numero de personas Maximo</label>
            <input type="text" name="personasMax" class="form-control">

        </div>

        <div class="form-group col-3">
            <label for="anticipo">Porcentaje de Anticipo</label>
            <input type="text" name="anticipo" class="form-control">
        </div>

        <div class="col-12 text-center">
            <button class="btn btn-warning" type="submit">Guardar</button>
        </div>
    </div>
    </form>
    </div>
</section>
@endsection