@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Guardado de parámetros</h2>
                <p class="text-white">Establece los precios del artista</p>
                </div>

            </div>
            </section><!-- End Contact Section -->

            
        </section>

    
    </div>

<div class="col-6">
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <br>
        <p>Ingresa los datos</p>
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
</div>
</div>
</div>

@endsection