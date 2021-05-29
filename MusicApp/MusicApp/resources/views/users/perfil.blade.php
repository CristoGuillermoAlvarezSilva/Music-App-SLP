@extends('../layouts.app')

@section('title')
    Mi perfil
@endsection

@section('content')
<section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p class="py-md-5"></p>
                @guest
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <h2>SuperUsuario </h2>
                
                @endif
                    @endguest
            
            <p>Perfil</p>
            
            </div>

            <?php

$cuenta = 0;

?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <div ><img src="assets/img/group.jpg" alt="Logo" class="img-fluid" width="300" ></i></div>
            <h4>Nombre: {{Auth::user()->name}}</h4>
            <p>Correo: {{Auth::user()->email}}</p>
            <form novalidate action="/users/{{Auth::user()->id}}/edit" >
                        <button class="btn btn-info" type="submit">Actualizar</button>
                    </form>
                    <form action="/users/{{Auth::user()->id}}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                        Eliminar
                        </button>
            </form>
                        
            </div>
        </div>
        <div class="section-title">
                <p class="py-md-5"></p>
               
                <h2>Perfil</h2>
                <p>Artista / grupo</p>
            
        </div>
        <div class="row">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($representantes as $r)
                    @guest
                        @else
                            @if( Auth::user()->id == $r->idU)
                                @if($cuenta == 0)
                                
                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon-box">
                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                        <h4>Grupo: {{$r->nombre}}</h4>
                                        @guest
                                            @else
                                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                                
                                                <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <button class="btn btn-info" type="submit">Actualizar</button>
                                                </form>
                                                <form action="/representantes/{{$r->id}}" method="POST">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                    Eliminar
                                                    </button>
                                        
                                                </form>
                                                @endif
                                        @endguest
                                        
                                        </div>
                                    </div>
                                
                                @endif
                                @if($cuenta == 1)
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="icon-box">
                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                        <h4>Grupo: {{$r->nombre}}</h4>
                                        @guest
                                            @else
                                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                                <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <button class="btn btn-info" type="submit">Actualizar</button>
                                                </form>
                                                <form action="/representantes/{{$r->id}}" method="POST">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                    Eliminar
                                                    </button>
                                        
                                                </form>
                                                @endif
                                        @endguest
                                        
                                        </div>
                                </div>
                                @endif
                                @if($cuenta == 2)
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="icon-box">
                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                        <h4>Grupo: {{$r->nombre}}</h4>
                                        @guest
                                            @else
                                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                                <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <button class="btn btn-info" type="submit">Actualizar</button>
                                                </form>
                                                <form action="/representantes/{{$r->id}}" method="POST">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                    Eliminar
                                                    </button>
                                        
                                                </form>
                                                @endif
                                        @endguest
                                        
                                        </div>
                                </div>
                                @endif
                                @if($cuenta >= 3)
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="icon-box">
                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                        <h4>Grupo: {{$r->nombre}}</h4>
                                        @guest
                                            @else
                                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                                <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <button class="btn btn-info" type="submit">Actualizar</button>
                                                </form>
                                                <form action="/representantes/{{$r->id}}" method="POST">
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                    Eliminar
                                                    </button>
                                        
                                                </form>
                                                @endif
                                        @endguest
                                        
                                        </div>
                                </div>
                                @endif
                                
                                <?php

                $cuenta = $cuenta +1;

?>
@endif
@endguest  
            @endforeach
        </div>
        <div class="section-title">
                <p class="py-md-5"></p>
               
                <h2>Perfil</h2>
                <p>Mis parametros</p>
            
        </div>
        <?php

$cuenta2 = 0;

?>
        <div class="row">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($representantes as $r)
            @guest
                @else
                    @if( Auth::user()->id == $r->idU)
                    @if($cuenta2 == 0)
                                
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box">
                                    <div ><img src="/img/logo.png" alt="logo" class="img-fluid" width="300" ></i></div>
                                    <h4><a href="/parametros">Parametros</a></h4>
                                    
                                    </div>
                                </div>
                            
                            @endif
                            @if($cuenta2 == 1)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                    <div ><img src="/img/logo.png" alt="Logo" class="img-fluid" width="300" ></i></div>
                                    <h4><a href="/parametros">Parametros</a></h4>
                                    
                                    </div>
                            </div>
                            @endif
                            @if($cuenta2 == 2)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                    <div ><img src="/img/logo.png" alt="Logo" class="img-fluid" width="300" ></i></div>
                                    <h4><a href="/parametros">Parametros</a></h4>
                                    
                                    </div>
                            </div>
                            @endif
                            @if($cuenta2 >= 3)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                    <div ><img src="/img/logo.png" alt="Logo" class="img-fluid" width="300" ></i></div>
                                    <h4><a href="/parametros">Parametros</a></h4>
                                    
                                    </div>
                            </div>
                            @endif
                            
                            <?php

            $cuenta2 = $cuenta2 +1;

?>
                @endif
            @endguest
        @endforeach
        </div>



        <div class="section-title">
                <p class="py-md-5"></p>
               
                <h2>Perfil</h2>
                <p>Cotizaciones</p>
            
        </div>
        <?php

$cuenta3 = 0;

?>

<div class="row">
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($cotizaciones as $c)
            @guest
                @else
                    @if(Auth::user()->id == $c->idU)
                    @if($cuenta == 0)
                                
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon-box">
                                        @foreach($representantes as $r)
                                            @guest
                                                @else
                                                    @if($c->idR == $r->idU)
                                                        <h4>{{$r->nombre}}</h4>
                                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                                @endif
                                            @endguest
                                        @endforeach
                                        <h4>Costo: {{$c->cotizacion}}</h4>
                                        <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                            <button class="btn btn-info" type="submit">Ver</button>
                                        </form>
                                        <form action="/cotizaciones/{{$c->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                Eliminar
                                            </button>
                                        </form>
                                        
                                        </div>
                                </div>
                            
                            @endif
                            @if($cuenta == 1)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box">
                                        @foreach($representantes as $r)
                                            @guest
                                                @else
                                                    @if($c->idR == $r->idU)
                                                        <h4>{{$r->nombre}}</h4>
                                                        <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                                @endif
                                            @endguest
                                        @endforeach
                                        <h4>Costo: {{$c->cotizacion}}</h4>
                                        <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                            <button class="btn btn-info" type="submit">Ver</button>
                                        </form>
                                        <form action="/cotizaciones/{{$c->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                Eliminar
                                            </button>
                                        </form>
                                        
                                        </div>
                            </div>
                            @endif
                            @if($cuenta == 2)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box">
                                    @foreach($representantes as $r)
                                        @guest
                                            @else
                                                @if($c->idR == $r->idU)
                                                    <h4>{{$r->nombre}}</h4>
                                                    <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                            @endif
                                        @endguest
                                    @endforeach
                                    <h4>Costo: {{$c->cotizacion}}</h4>
                                    <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                        <button class="btn btn-info" type="submit">Ver</button>
                                    </form>
                                    <form action="/cotizaciones/{{$c->id}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Eliminar
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                            @endif
                            @if($cuenta >= 3)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box">
                                    @foreach($representantes as $r)
                                        @guest
                                            @else
                                                @if($c->idR == $r->idU)
                                                    <h4>{{$r->nombre}}</h4>
                                                    <div ><img src="/{{$r->path}}" alt="Logo" class="img-fluid" width="300" ></i></div>
                                            @endif
                                        @endguest
                                    @endforeach
                                    <h4>Costo: {{$c->cotizacion}}</h4>
                                    <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                        <button class="btn btn-info" type="submit">Ver</button>
                                    </form>
                                    <form action="/cotizaciones/{{$c->id}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Eliminar
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                            @endif
                            
                            <?php

            $cuenta3 = $cuenta3 +1;

?>

                @endif
            @endguest
        @endforeach


        </div>



            
        </div>
    </section>



@endsection