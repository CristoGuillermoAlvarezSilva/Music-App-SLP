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
                <h2>Actualización de parámetros</h2>
                <p class="text-white">Ingresa los nuevos parámetros</p>
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

        <p>Parámetros</p>

    </div>

    <form action="/parametros/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
       
        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>

       
        <div class="form-group col-3">
            <label for="precioBase">Precio Base</label>
            <input type="text" name="precioBase" class="form-control" value="{{$item->precioBase}}">
            <label for="personasBase">Numero de personas Base</label>
            <input type="text" name="personasBase" class="form-control" value="{{$item->personasBase}}">

        </div>

        <div class="form-group col-3">
            <label for="precioMedio">Precio Medio</label>
            <input type="text" name="precioMedio" class="form-control" value="{{$item->precioMedio}}">
            <label for="personasMedio">Numero de personas Medio</label>
            <input type="text" name="personasMedio" class="form-control" value="{{$item->personasMedio}}">

        </div>
        <div class="form-group col-3">
            <label for="precioAlto">Precio Alto</label>
            <input type="text" name="precioAlto" class="form-control" value="{{$item->precioAlto}}">
            <label for="personaA">Numero de personas Alto</label>
            <input type="text" name="personasAlto" class="form-control" value="{{$item->personasAlto}}">

        </div>
        <div class="form-group col-3">
            <label for="precioMax">Precio Maximo</label>
            <input type="text" name="precioMax" class="form-control" value="{{$item->precioMax}}">
            <label for="personasMax">Numero de personas Maximo</label>
            <input type="text" name="personasMax" class="form-control" value="{{$item->personasMax}}">

        </div>

        <div class="form-group col-3">
            <label for="anticipo">Porcentaje de Anticipo</label>
            <input type="text" name="anticipo" class="form-control" value="{{$item->anticipo}}">
            

        </div>
        
        <div class="col-12 text-center">
            <button class="btn btn-warning" type="submit">Actualizar</button>
        </div>
    </form>
    </div>
</section>
</div></div></div>
@endsection