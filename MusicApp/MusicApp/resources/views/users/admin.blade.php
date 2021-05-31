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
            <div class="icon-box panel">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h4><a class="panelLink" href="/users">Usuarios</a></h4>
              <p>Administra los Usuarios registrados en la plataforma!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box panel">
              <div class="icon"><i class="fas fa-compact-disc"></i></div>
              <h4><a class="panelLink" href="/generos">Generos</a></h4>
              <p>Administra los Generos registrados en la plataforma!</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box panel">
              <div class="icon"><i class="fas fa-music"></i></div>
              <h4><a class="panelLink" href="/inde">Representantes</a></h4>
              <p>Ver a todos los representantes de la página</p>
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