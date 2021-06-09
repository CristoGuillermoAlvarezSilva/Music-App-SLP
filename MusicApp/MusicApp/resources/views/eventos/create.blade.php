
@extends('../layouts.app')
@section('title')
    Eventos
@endsection

@section('title')
    Music App
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
                <h2>Evento</h2>
                <p class="text-white">Crea tu publicación</p>
                </div>

            </div>
            </section><!-- End Contact Section -->

        </section>
    
    </div>

    <div class="col-6">
    <section id="contact" class="contact">
      <div class="container py-md-5" data-aos="fade-up">


        <div class="row mt-5">
        
        </div>

          <div class="col-lg-8 align-self-center">
          <form action="/eventos" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
        <div class="row">
            
        
        <div class="form-group col-4">
            <labe for="titulo">Nombre del evento:</labe>
            <input type="text" name="titulo" class="form-control">
            @error('titulo')
            <span class="invalid-feedback" role="alert">
                <strong>Debe agregar un titulo</strong>
            </span>
            @enderror

        </div>
        <div class="form-group col-4">
            <labe for="descripcion">Descripción del evento:</labe>
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
            <button class="btn btn-warning" type="submit">Publicar</button>
        </div>
        </div>
    </form>

          </div>

        </div>

      </div>
    </section>

    </div>
    


  </div>
</div>







@endsection

