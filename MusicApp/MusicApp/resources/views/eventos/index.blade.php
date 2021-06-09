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
            <p class="py-md-5"></p>
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
            @foreach($representantes as $item)
            @guest
                @else
                    @if(Auth::user()->id == $item->idU)
                    <!--Administrador-->
                <div class="d-flex justify-content-end mb-2">
                    <a href="/eventos/create" class="btn btn-warning">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                
                @endif
                    @endguest
                    @endforeach 
            </div>

        <div class="row ">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($eventos as $item)

              

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box eventCard">
                        @foreach($representantes as $item2)
                        @guest
                        @else
                            @if($item->idR == $item2->idU)
                                   
                                    <h5>{{$item2->nombre}}</h5>
                                    <img src="/{{$item2->path}}" alt="" width="150px" height="150px">
                                    <br>
                                    <br>
                            @endif
                        @endguest
                @endforeach 
                        
                        <div class="form-row ">
                            <div class="row">
                                <label><b>Titulo del evento: &nbsp;</b></label><p>{{$item->titulo}}</p>
                            </div>
                            <div class="row">
                                <label><b>Descripción: &nbsp;</b></label><p>{{$item->descripcion}}</p>
                            </div>
                            <div class="row">
                                <label><b>Lugar: &nbsp;</b></label><p>{{$item->lugar}}</p>
                            </div>
                            
                            
                                    
                            
                            
                            <div class="row">
                                <label><b>Hora: &nbsp;</b></label><p>{{$item->hora}}</p>
                                &nbsp;<label><b>Costo: &nbsp;</b></label><p>${{$item->costo}} MXN</p>
                            </div>
                            
                        @guest
                            @else
                                @if(Auth::user()->id == $item->idR)
                                <div class="row">
                                    <div class="col-5">
                                        <p><a class="btn btn-info editIcon" href="/eventos/{{$item->id}}/edit"><i class="fas fa-pencil-alt"></i></a></p></div>
                                    <div class="col-2">
                                        <form action="/eventos/{{$item->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger editIcon" type="submit"><i class="fas fa-times"></i></button>
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




 