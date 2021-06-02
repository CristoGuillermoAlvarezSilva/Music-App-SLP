@extends('../layouts.app')

@section('title')
    Mi perfil
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
        <section id="hero" class="">
            <div class="container">
            <!-- ======= Contact Section ======= -->
            <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <div class="row">
                        <h2>Información del usuario</h2>
                    </div>

                    <div class="row">
                        <p class="whiteClr">{{Auth::user()->name}}</p>
                    </div>
                        
                    <div class="col-6">
                        <div class="row whiteClr">
                            <label><b>Correo electrónico:&nbsp;</b></label><label>{{Auth::user()->email}}</label>
                        </div>
                    
                    <div class="row">
                        <form novalidate action="/users/{{Auth::user()->id}}/edit" >
                            <button class="btn btn-info" type="submit"><i class="far fa-edit"></i></button>
                        </form>
                        &nbsp;
                        <form action="/users/{{Auth::user()->id}}" method="POST">
                        @csrf 
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i></button>
                        </form>
                    </div>          
                </div>
        </div>
    </div>
                    

    <div class="container">
        
        @foreach($representantes as $r)
                    @guest
                        @else
                            @if( Auth::user()->id == $r->idU)
        
                                <div class="margen">
                                    <div class="icon-box">
                                        <div class="card-title">
                                            <h3>{{$r->nombre}}</h3>
                                        </div>
                                        <div class="card-body">
                                            <img src="/{{$r->path}}" class="img-fluid" width="300" height="300">
                                            @foreach($representantes as $r)
                                                @guest
                                                    @else
                                                        @if( Auth::user()->id == $r->idU)
                                                            <div class="margen">
                                                            <br>
                                                                <a class="btn btn-warning" href="/parametros">Parámetros</a>     
                                                            </div>
                                                    @endif
                                                @endguest
                                            @endforeach
                                            <div class="row">
                                                <div class="col-6">
                                                    <form novalidate action="/representantes/{{$r->idU}}/edit" >
                                                    <br>
                                                    <button class="btn btn-info" type="submit"><i class="far fa-edit"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col-6">
                                                    <form action="/representantes/{{$r->id}}" method="POST">
                                                        @csrf 
                                                        @method('DELETE')
                                                        <br>
                                                        <button class="btn btn-danger" type="submit">
                                                        <i class="fas fa-times"></i>
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
    </div>

        @foreach($representantes as $r)
            @guest
                @else
                    @if( Auth::user()->id == $r->idU)
                       
                        <div class="container">
                        <br>
                            <div class="icon-box">
                                <div class="card-title">
                                    <h3 class="text-center">  Agenda  </h3>
                                </div>
                                <div class="container row">
                                @foreach($calendarios as $cale)
                                    @guest  
                                        @else
                                            @if(Auth::user()->id == $cale->idR )
                                                
                                                <div class="icon-box fechaOcupada">
                                                    <div class="foRelat">
                                                        <h4>Fecha ocupada</h4>
                                                        <label><b>Fecha:&nbsp;</b></label><label >{{$cale->fecha}}</label><br>
                                                        <label><b>Hora inicio:&nbsp;</b></label><label >{{$cale->inicio}}</label><br>
                                                        <label><b>Hora fin:&nbsp;</b></label><label >{{$cale->fin}}</label><br>
                                                    
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <form novalidate action="/calendarios/{{$cale->id}}/edit" >
                                                                    <button class="btn btn-info" type="submit"><i class="far fa-edit"></i></button>
                                                                </form>
                                                            </div>
                                                            <div class="col-6">
                                                                <form action="/calendarios/{{$cale->id}}" method="POST">
                                                                @csrf 
                                                                @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit">
                                                                    <i class="fas fa-times"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                
                                        @endif
                                    @endguest
                                @endforeach
                                </div>
                                <div class="card-body">
                                    <label><a class="btn btn-warning" href="/calendarios/create">Agregar fecha</a></label>
                                </div>
                            </div>
                        </div>
                @endif
            @endguest
        @endforeach

        <div class="container margen">
            <div class="icon-box">
                <h3 class="text-center">Cotizaciones</h3>
                    <div class="container row">
                    @foreach($cotizaciones as $c)
                        @guest
                            @else
                                @if(Auth::user()->id == $c->idU)
                        
                            <div class="icon-box foSCotiza">
                                <div class="foCoti">
                                    @foreach($representantes as $r)
                                        @guest
                                            @else
                                                @if($c->idR == $r->idU)

                                                    <h3 class="card-title">{{$r->nombre}}</h3><br>
                                                    <img src="/{{$r->path}}" class="img-fluid" width="150"><br><br>
                                                    <label class="card-title"><b>Telefono de contacto: </b>{{$r->telefono}}</label>
                                            @endif
                                        @endguest
                                    @endforeach

                                    <h5 class="card-title"><b>Costo: </b> {{$c->cotizacion}}</h5>    
                                    
                                    <div class="row">
                                        <div class="col-6">
                                            <form novalidate action="/cotizaciones/{{$c->id}}/edit" >
                                                <button class="btn btn-info" type="submit"><i class="fas fa-info-circle"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-6">
                                            <form action="/cotizaciones/{{$c->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                    </div>                  
                @endif
            @endguest
        @endforeach
                </div>
            </div><br><br><br><br>
        </section><!-- End Contact Section -->
</div>

</div>
</div>
</div>
@endsection