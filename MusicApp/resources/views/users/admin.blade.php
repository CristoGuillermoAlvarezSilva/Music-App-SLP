@guest

    @else
       @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                            
                        
@extends('../layouts.app')

@section('title')
    Panel 
@endsection

@section('content')
<h1 class="card-body titulo-pags">Panel de SuperUsuario</h1>
<div class="categoria-items row py-5">

    <div class="card panel">
        <a class="" style="font-size: 8em" href="/users">
           <div class="card-body">
           <div class="titulo-gens"></div>
                <h5 class="text-center">Usuarios</h5>
                <img src="{{asset('img/usuarios.png')}}" alt="Logo" class="img-fluid" width="125" >
           
           </div>
           </a>
            
        </div>
        <div class="card panel">
            <a class="" style="font-size: 8em" href="/generos">
                <h5 class="text-center">Generos</h5>
                <img src="{{asset('img/generos.png')}}" alt="Logo" class="img-fluid" width="125" >
            </a>
        </div>

        
</div>

@endsection

    @endif
        @endguest