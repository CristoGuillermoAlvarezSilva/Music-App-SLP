

@extends('./layouts.app')

@section('title')
  Inicio
@endsection

@section('content')
 <!--Primer modulo modulo-->

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