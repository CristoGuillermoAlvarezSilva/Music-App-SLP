@extends('../layouts.app')
@section('title')
    Eventos
@endsection


<!--Contenido de la pagina-->
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                <h2>Galeria</h2>
                <p class="text-white">Próximos eventos musicales</p>
                </div>
            </div>
            </section><!-- End Contact Section -->

        </section>
    </div>

    <div class="col-6">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p></p>
                @guest
                <h2>Disponibles </h2>
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <h2>SuperUsuario </h2>
                
                @endif
                    @endguest
            
            <p>Eventos</p>
            @guest
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <div class="d-flex justify-content-end mb-2">
                    <a href="/eventos/create" class="btn btn-warning">
                        Agregar evento musical
                    <i class="fas fa-plus"></i>
                    </a>
                </div>
                
                @endif
                    @endguest
            </div>

        <div class="row">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($eventos as $item)

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box eventCard">
                        <div ><img src="/{{$item->path}}" alt="Logo" class="img-fluid" width="150" ></i></div>
                        <h4>{{$item->nombre}}</h4>
                        <div class="form-row">
                            <label><b>Titulo del evento: &nbsp;</b></label><p>{{$item->titulo}}</p>
                            <label><b>Descripcion: &nbsp;</b></label><p>{{$item->descripcion}}</p>
                            <label><b>Lugar: &nbsp;</b></label><p>{{$item->lugar}}</p>
                            <label><b>Fecha: &nbsp;</b></label><p>{{$item->fecha}}</p>
                            <label><b>Hora: &nbsp;</b></label><p>{{$item->hora}}</p>
                            <label><b>Costo: &nbsp;</b></label><p>${{$item->costo}} MXN</p>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <div class="row">
                                    <div class="col-5">
                                        <p><a class="btn btn-warning" href="/eventos/{{$item->id}}/edit">Editar</a></p></div>
                                    <div class="col-2">
                                        <form action="/eventos/{{$item->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                        </form>
                                    </div>
                                    
                                    
                                </div>
                                @endif
                        @endguest
                        </div>
                        </div>
                    </div>

            @endforeach
        </div>

        </div>
    </section>

    </div>
    
  </div>
</div>






@endsection




 