<style>
    .o{
        color:black;
        font-size:1vw;
        font-weight: bold;
    }
    .per{
        background-color:#FAEEFC ;
    }
   
</style>
@extends('../layouts.app')

@section('title')
    Mi perfil
@endsection

@section('content')
    <h1 class="text-center py-5">Mi perfil</h1>

    <div class="row mx-0">
        <div class="col-3">
            <div class="py-5">
                <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid" width="350" >
            </div>
           
            
        </div>
        <div class="">
            <div class="card py-5">
                <div class="card-title">
                    <h3 class="text-center">Usuario</h3>
                </div>
                <div class="card-body">
                    <label class="o py-2">Nombre: {{Auth::user()->name}}</label>
                    <div>
                        <label class="o py-2">Correo: {{Auth::user()->email}}</label>
                    </div>
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
        </div>

        @foreach($representantes as $r)
                    @guest
                        @else
                            @if( Auth::user()->id == $r->idU)
        
                                <div class="">
                                    <div class="card py-5">
                                        <div class="card-title">
                                            <h3 class="text-center">  Representante  </h3>
                                        </div>
                                        <div class="card-body">
                
                                            <tr class="d-flex">
                                    
                                                <td class="col-2"><h5 class="card-title">Grupo: {{$r->nombre}}</h5>
                                            
                                                <img src="/{{$r->path}}" class="img-fluid" width="150">
                                        
                                            </tr> 
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
                        <div class="">
                            <div class="card py-5">
                                <div class="card-title">
                                    <h3 class="text-center">  Parametros  </h3>
                                </div>
                                <div class="card-body">
                             
                                                
                                                <h3><a href="/parametros">Parametros</a></h3>
                                                    
                                                             
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
                        <div class="">
                            <div class="card py-5">
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
                                            @endif
                                        @endguest
                                    @endforeach


                                    <td class="col-2"><h5 class="card-title">Costo: {{$c->cotizacion}}</h5>    
                                    </tr> 
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
                        </div>

                @endif
            @endguest
        @endforeach

               
        
    </div>
@endsection