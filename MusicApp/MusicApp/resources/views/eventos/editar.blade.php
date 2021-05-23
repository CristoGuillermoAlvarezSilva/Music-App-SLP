@guest
    @else
        @if(Auth::user()->id == $item->idR)
@extends('../layouts.app')

@section('title')
    Editar evento
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
                <h2>Eventos</h2>
                <p class="text-white">Editar evento!</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->

            
        </section>

    
    </div>

    <div class="col-6">
      <section id="contact" class="contact">
      <section id="contact" class="contact">
      <div class="container py-md-5" data-aos="fade-up">


        <div class="row mt-5">

                <div class="col-lg-2">
                <div class="info">
                    <div class="address">
                    <img src="assets/img/group.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

          <div class="col-lg-8 mt-5 mt-lg-0 align-self-center py-md-5">
          <form action="/eventos/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
        <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
        <div class="form-group col-4">
            <labe for="titulo">Nombre del evento: </labe>
            <input type="text" name="titulo" class="form-control" value="{{$item->titulo}}">

        </div>
       
        <div class="form-group col-4">
            <labe for="descripcion">Descripcion del evento:</labe>
            <input type="text" name="descripcion" class="form-control" value="{{$item->descripcion}}">

        </div>
        <div class="form-group col-4">
            <labe for="lugar">Lugar del evento:</labe>
            <input type="text" name="lugar" class="form-control" value="{{$item->lugar}}">

        </div>
        <div class="form-group col-4">
            <labe for="fecha">Fecha del evento:</labe>
            <input type="date" name="fecha" class="form-control" value="{{$item->fecha}}">

        </div>
        <div class="form-group col-4">
            <labe for="hora">Hora del evento:</labe>
            <input type="time" name="hora" class="form-control" value="{{$item->hora}}">

        </div>
        <div class="form-group col-4">
            <labe for="costo">Costo:</labe>
            <input type="text" name="costo" class="form-control" value="{{$item->costo}}">

        </div>
       
        <div class="form-group col-10">
            <labe for="imagen">Imagen</labe>
            <input type="file" name="imagen" class="form-control">

        </div>
        <div class="col-12 text-center">
            <button class="btn btn-warning" type="submit">Registrar!</button>
        </div>
    </form>

          </div>

        </div>

      </div>
    </section>
    </section>

    </div>
    


  </div>
</div>





@endsection

@endif
        @endguest
