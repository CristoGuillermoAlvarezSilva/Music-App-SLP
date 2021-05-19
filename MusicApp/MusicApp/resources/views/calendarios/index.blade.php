@extends('../layouts.app')
@section('title')
    Calendario
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Calendario</h1>
    @guest

    @else
        <a class="btn btn-dark" type="button" href="/calendarios/create">
            Agregar Fecha disponible/ocupada
        </a>
    @endguest
    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
               
               
                @foreach($calendarios as $item)
                    @guest
                        @else
                            @if(Auth::user()->id == $item->idR)
                        
                            @foreach($representantes as $item2)
                                @guest
                                    @else
                                        @if($item->idR == $item2->idU)
                                            <ul class="tipo justify-content-center">{{$item2->nombre}}</ul>  

                                        @endif
                                @endguest

                            @endforeach 
                            
                               <!--CODIGO CALENDARIO-->
                                         
                            @endif
                            
                        @endguest
                @endforeach   

                
    </div>
@endsection