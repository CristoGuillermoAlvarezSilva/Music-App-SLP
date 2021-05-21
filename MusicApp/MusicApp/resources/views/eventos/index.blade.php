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
                <p class="text-white">Encuentra el genero musical que prefieras!</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->

            </div>
        </section>
        <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p class="py-md-5"></p>
                @guest
                <h2>Disponibles </h2>
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <h2>SuperUsuario </h2>
                
                @endif
                    @endguest
            
            <p>Generos</p>
            @guest
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <div class="d-flex justify-content-end mb-2">
                    <a href="/eventos/create" class="btn btn-warning">
                        Agregar Evento musical
                    <i class="fas fa-plus"></i>
                    </a>
                </div>
                
                @endif
                    @endguest
            </div>

            <?php

$cuenta = 0;

?>


        <div class="row">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($eventos as $item)
                @if($cuenta == 0)
                
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                        <div ><img src="/{{$item->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                        <h4>{{$item->nombre}}</h4>
                        
                                        <p>Titulo del evento:{{$item->titulo}}</p>
                                        <p>Descripcion: {{$item->descripcion}}</p>
                                        <p>Lugar: {{$item->lugar}}</p>
                                        <p>Fecha: {{$item->fecha}}</p>
                                        <p>Hora: {{$item->hora}}</p>
                                        <p>Costo: {{$item->costo}}</p>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <p><a href="/eventos/{{$item->id}}/edit">Editar</a></p>
                                <form action="/eventos/{{$item->id}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                @endif
                        @endguest
                        
                        </div>
                    </div>
                   
                @endif
                @if($cuenta == 1)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                        <div ><img src="/{{$item->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                        <h4>{{$item->nombre}}</h4>
                        
                                        <p>Titulo del evento:{{$item->titulo}}</p>
                                        <p>Descripcion: {{$item->descripcion}}</p>
                                        <p>Lugar: {{$item->lugar}}</p>
                                        <p>Fecha: {{$item->fecha}}</p>
                                        <p>Hora: {{$item->hora}}</p>
                                        <p>Costo: {{$item->costo}}</p>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <p><a href="/eventos/{{$item->id}}/edit">Editar</a></p>
                                <form action="/eventos/{{$item->id}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                @endif
                        @endguest
                        
                        </div>
                </div>
                @endif
                @if($cuenta == 2)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                        <div ><img src="/{{$item->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                        <h4>{{$item->nombre}}</h4>
                        
                                        <p>Titulo del evento:{{$item->titulo}}</p>
                                        <p>Descripcion: {{$item->descripcion}}</p>
                                        <p>Lugar: {{$item->lugar}}</p>
                                        <p>Fecha: {{$item->fecha}}</p>
                                        <p>Hora: {{$item->hora}}</p>
                                        <p>Costo: {{$item->costo}}</p>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <p><a href="/eventos/{{$item->id}}/edit">Editar</a></p>
                                <form action="/eventos/{{$item->id}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                @endif
                        @endguest
                        
                        </div>
                </div>
                @endif
                @if($cuenta >= 3)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                        <div ><img src="/{{$item->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                        <h4>{{$item->nombre}}</h4>
                        
                                        <p>Titulo del evento:{{$item->titulo}}</p>
                                        <p>Descripcion: {{$item->descripcion}}</p>
                                        <p>Lugar: {{$item->lugar}}</p>
                                        <p>Fecha: {{$item->fecha}}</p>
                                        <p>Hora: {{$item->hora}}</p>
                                        <p>Costo: {{$item->costo}}</p>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <p><a href="/eventos/{{$item->id}}/edit">Editar</a></p>
                                <form action="/eventos/{{$item->id}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                @endif
                        @endguest
                        
                        </div>
                </div>
                @endif
                
                <?php

$cuenta = $cuenta +1;

?>
            @endforeach
        </div>



            
        </div>
    </section>
    
    
    
    <!-- End Services Section -->
    
    </div>
  </div>
</div>



@endsection



 
