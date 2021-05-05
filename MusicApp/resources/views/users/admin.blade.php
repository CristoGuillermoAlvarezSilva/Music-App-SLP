@guest
    @else
       @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                            
                        
@extends('../layouts.app')

@section('title')
    Panel 
@endsection

@section('content')
<div class="">
    <h3 class="py-8 text-center">Panel</h3>
    <div class="d-flex flex-column flex-md-row flex-md-wrap justify-content-center py-5">
        <a class="btn btn-outline-dark m-2" style="font-size: 8em" href="/users">
            <h5 class="text-center">Usuarios</h5>
            <img src="{{asset('img/usuarios.png')}}" alt="Logo" class="img-fluid" width="125" >
        </a>
        <a class="btn btn-outline-dark m-2" style="font-size: 8em" href="/generos">
            <h5 class="text-center">Generos</h5>
            <img src="{{asset('img/generos.png')}}" alt="Logo" class="img-fluid" width="125" >
        </a>
        
        
    
    </div>
</div>

@endsection

    @endif
        @endguest