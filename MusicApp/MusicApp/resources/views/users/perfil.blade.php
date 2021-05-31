@extends('../layouts.app')

@section('title')
    Mi perfil
@endsection

@section('content')
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
            <p class="py-md-5"></p>
            <p class="py-md-3"></p>
          <h2>Información del usuario</h2>
          <p>Mi perfil</p>
    </div>

    <div class="row">
        
        <div class="margen">
            <div class="icon-box perfilCard">
                <div class="card-title">
                    <h3>Usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 aliStart">
                            <label ><b>Nombre:&nbsp;</b></label><br>
                            <label ><b>Correo electrónico:&nbsp;</b></label>
                        </div>
                        <div class="col-4 aliStart">
                            <label >{{Auth::user()->name}}</label><br>
                            <label >{{Auth::user()->email}}</label>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-6">
                            <form novalidate action="/users/{{Auth::user()->id}}/edit" >
                                <button class="btn btn-warning" type="submit">Actualizar</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <form action="/users/{{Auth::user()->id}}" method="POST">
                            @csrf 
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
              
                   
                    
                </div>
            
            </div>
        </div>

        @foreach($representantes as $r)
                    @guest
                        @else
                            @if( Auth::user()->id == $r->idU)
        
                                <div class="margen">
                                    <div class="icon-box repCard">
                                        <div class="card-title">
                                            <h3>  Representante  </h3>
                                        </div>
                                        <div class="card-body">
                                            <label><b>Grupo:&nbsp;</b></label><label >{{$r->nombre}}</label><br>
                                            <img src="/{{$r->path}}" class="img-fluid" width="150">
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <br>
                                                    <button class="btn btn-warning" type="submit">Actualizar</button>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <form action="/representantes/{{$r->id}}" method="POST">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <br>
                                                        <button class="btn btn-danger" type="submit">
                                                            Eliminar
                                                        </button>
                                            
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                        
                                        </div>
            
                                    </div>
                                </div>

        @endif
                        @endguest  
                @endforeach
        @foreach($representantes as $r)
            @guest
                @else
                    @if( Auth::user()->id == $r->idU)
                        <div class="margen">
                            <div class="icon-box paramCard">
                                <div class="card-title">
                                    <h3>  Parametros  </h3>
                                </div>
                                <div class="card-body">
                                    <p class="textParams">Da clic en el siguiente botón para ir a la sección de parámetros</p>
                                    <br>
                                    <a class="btn btn-warning" href="/parametros">Ir a sección</a>     
                                </div>
                            </div>
                        </div>
                @endif
            @endguest
        @endforeach

        @foreach($representantes as $r)
            @guest
                @else
                    @if( Auth::user()->id == $r->idU)


                        <div class="container">
                            <div class="card">
                                <div class="card-title">
                                    <br><br>
                                    <h3 class="text-center">  Agenda  </h3>
                                </div>
                                <div class="row">
                                @foreach($calendarios as $cale)
                                    @guest  
                                        @else
                                            @if(Auth::user()->id == $cale->idR )

                                                <div class="icon-box fechaOcupada">
                                                    <h4>Fecha ocupada</h4>
                                                    <label><b>Fecha:&nbsp;</b></label><label >{{$cale->fecha}}</label><br>
                                                    <label><b>Hora inicio:&nbsp;</b></label><label >{{$cale->inicio}}</label><br>
                                                    <label><b>Hora fin:&nbsp;</b></label><label >{{$cale->fin}}</label><br>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <form novalidate action="/calendarios/{{$cale->id}}/edit" >
                                                                <button class="btn btn-warning" type="submit">Modificar</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-6">
                                                            <form action="/calendarios/{{$cale->id}}" method="POST">
                                                            @csrf 
                                                            @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    Eliminar
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                        @endif
                                    @endguest
                                @endforeach
                                </div>
                                <div class="card-body">
                                    <label><a class="btn btn-warning" href="/calendarios/create">Agregar otra fecha</a></label>
                                </div>
                            </div>
                        </div>
                @endif
            @endguest
        @endforeach

        @foreach($cotizaciones as $c)
            @guest
                @else
                    @if(Auth::user()->id == $c->idU)
                        <div class="margen">
                            <div class="icon-box">
                                <div class="card-title">
                                    <h3 class="text-center">Cotizaciones</h3>
                                </div>
                                <div class="card-body">        
                                    @foreach($representantes as $r)
                                        @guest
                                            @else
                                                @if($c->idR == $r->idU)
                                                    <td class="col-2"><h5 class="card-title">{{$r->nombre}}</h5>
                                                    <img src="/{{$r->path}}" class="img-fluid" width="100">
                                                    <td class="col-2"><label class="card-title">Telefono para contactar:{{$r->telefono}}</label>
                                            @endif
                                        @endguest
                                    @endforeach


                                    <td class="col-2"><h5 class="card-title">Costo: {{$c->cotizacion}}</h5>    
                                    </tr> 
                                    <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                        <button class="btn btn-warning" type="submit">Ver</button>
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
                        </div>

                @endif
            @endguest
        @endforeach
    </div>
    </div>
</section>
@endsection