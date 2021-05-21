@guest
    @else
       @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                            
                        
@extends('../layouts.app')

@section('title')
    Panel 
@endsection

@section('content')

<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p class="py-md-5"></p>
            <p class="py-md-5"></p>
          <h2>SuperUsuario </h2>
          <p>Panel</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('img/usuarios.png')}}" alt="Logo" class="img-fluid" width="125" ></i></div>
              <h4><a href="/users">Usuarios</a></h4>
              <p>Administra los Usuarios registrados en la plataforma!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="/generos">Generos</a></h4>
              <p>Administra los Generos registrados en la plataforma!</p>
            </div>
          </div>


        </div>
        <p class="py-md-5"></p>
            <p class="py-md-5"></p>
            <p class="py-md-5"></p>
            <p class="py-md-5"></p>
            <p class="py-md-5"></p>
            <p class="py-md-5"></p>
      </div>
    </section><!-- End Services Section -->





@endsection

    @endif
        @endguest
