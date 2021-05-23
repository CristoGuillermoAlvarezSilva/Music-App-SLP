@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
@extends('../layouts.app')
@section('title')
    Generos musicales
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
                <h2>Generos</h2>
                <p class="text-white">Crea un Genero!</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->

            
        </section>

    
    </div>

    <div class="col-6">
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
          <form action="/generos" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group col-4">
            <labe for="genero">Genero</labe>
            <input type="text" name="genero" class="form-control">

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

    </div>
    


  </div>
</div>


@endsection

@endif
        @endguest