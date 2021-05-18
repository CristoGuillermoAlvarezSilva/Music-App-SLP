@extends('../layouts.app')
@section('title')
    Calendario
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Calendario</h1>
   
    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
                <?php
                     $ban=0;
              
                ?>
               
                @foreach($calendarios as $item)
                    @guest
                        @else
                            @if(Auth::user()->id == $item->idR)
                            <?php
                                $ban=1;
                                  
                            ?>
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

                @guest
                        @else
                            @if($ban == 0 )
                                <a class="btn btn-dark" type="button" href="/calendarios/create">
                                    Crear Calendario
                                </a>
                            @endif
                            
                        @endguest
    </div>
@endsection