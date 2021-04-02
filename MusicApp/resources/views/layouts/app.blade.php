<style>
.fondo{
    background-color:#000000;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body class="bg-white">
    <div class="container-fluid">

        <!--Encabezado-->
        <div class="fondo row">
            <a class="col-6 py-3" href="/">
                <div class="d-inline-block" id="logo">
                    <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid" width="150" >
                </div>
              
            </a>
            <div class=" col-6 p-2 py-3">
                <div class="d-flex justify-content-end">
                    <div class="ml-3 text-right d-inline-block">
                        @guest
                        <a class="btn btn-dark" type="button" href="/login">
                            Inicio de sesión
                        </a>
                        <i class="fas fa-paw text-white"id="huella"></i>
                        <a class="btn btn-dark" type="button" href="/register">
                            Registrarse
                        </a>
                        @else
                        <button class="btn btn-dark" data-toggle="collapse" data-target="#menu_user">
                          
                            {{ Auth::user()->name }}
                        </button>
                        <div class="collapse" id="menu_user">
                           
                            <a class="btn btn-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </div>
                    
                </div>
                
                <div class="mt-4 py-3">
                    <ul class=" text-center">
                   
                        <a class="btn btn-dark" href="/">Incio</a>
                       
                        <a class="btn btn-dark" href="/generos">Artistas</a>
                        @guest
                        @else
                            @if(Auth::user()->rol == "super")
                            <a class="btn btn-dark" href="/administrador">Panel SuperUsuario</a>
                            @endif
                        @endguest
                        @guest
                        @else
                            @if(Auth::user()->rol == "Administrador")
                            <a class="btn btn-dark" href="/administrador">Panel Administrador</a>
                            @endif
                        @endguest
                   
                    </ul>
                </div>
                
            </div>
          
            
            
             
        </div>
      
        
        <div id="page-content">
            @yield('content')
        </div>
        
        <!--Pie de pagina-->
        <div class="fondo d-none d-md-block row py-2 ">
                <h3 class="text-center text-white">Contactanos</h3>
                
        </div>

     
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>