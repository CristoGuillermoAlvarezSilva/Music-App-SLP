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
<body>
    <div class="container">

        <!--Encabezado-->
        <div class="row">
            <a class="col-4 py-3" href="/">
                <div class="d-inline-block" id="logo">
                    <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid" width="150" height="50" >
                </div>
                <div class="mt-2 py-3">
                    <ul class=" text-center">
                   
                        <a class="" href="/">Inicio</a>
                        <span class="separador">|</span>
                        <a class="" href="/generos">Generos</a>
                        <span class="separador">|</span>
                        <a class="" href="/eventos">
                            Eventos
                        </a>
                        <span class="separador">|</span>
                        <a class="" href="/novedades">
                            Blog
                        </a>

                        @guest
                        @else
                            @if(Auth::user()->rol == "super")
                            <span class="separador">|</span>
                            <a class="" href="/administrador">Panel SuperUsuario</a>
                            @endif
                        @endguest
                        @guest
                        @else
                            @if(Auth::user()->rol == "Administrador")
                            <span class="separador">|</span>
                            <a class="" href="/administrador">Panel Administrador</a>
                            @endif
                        @endguest
                   
                    </ul>
                </div>
            </a>
            <div class=" col-3 p-0 py-3">
                <div class="d-flex justify-content-end">
                    <div class="ml-3 text-right d-inline-block">
                        @guest
                        <a class="" href="/login">
                            Inicio de sesión
                        </a>
                        <span class="separador">|</span>
                        <a class="" href="/register">
                            Registrarse
                        </a>
                        @else
                        <div>

                        <a class="usuario" data-toggle="collapse" data-target="#menu_user">
                          
                          {{ Auth::user()->name }}
                         </a>
                      <div class="collapse" id="menu_user">
                          
                          <a class="" href=""
                              onclick="">
                              {{ __('Perfil') }}
                          </a>
                          <span class="separador">|</span>
                          <a class="" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              {{ __('Salir') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                        </div>
                        
                        </div>
                        @endguest
                    </div>
                    
                </div>
                
                
                
            </div>
          
            
            
             
        </div>
      
        
        <div id="page-content">
            @yield('content')
        </div>
        
        <!--Pie de pagina-->
        <div class="fondo d-none d-md-block row py-2 ">
                <h3 class="text-center descripcion">Contactanos</h3>
                
        </div>

     
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>