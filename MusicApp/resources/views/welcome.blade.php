

@extends('./layouts.app')

@section('title')
  Inicio
@endsection

@section('content')
 <!--Primer modulo modulo-->
 <a class="btn btn-dark" type="button" href="/eventos">
      Eventos
  </a>
  <a class="btn btn-dark" type="button" href="/novedades">
      Blog
  </a>
 @guest



 @else

  <a class="btn btn-dark" type="button" href="/representantes/create">
                           Crear representante
  </a>

 
  <a class="btn btn-dark" type="button" href="/parametros">
                           Parametros
  </a>
 

  @endguest
 
@endsection