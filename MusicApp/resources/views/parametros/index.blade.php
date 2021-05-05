@extends('../layouts.app')
@section('title')
    Pametros
@endsection


<!--Contenido de la pagina-->
@section('content')
    <h1 class="text-center">Parámetros</h1>
   
    <!--Todos usuarios-->
   <div class="categoria-items row py-5">
                <?php
                     $ban=0;
              
                ?>
               
                @foreach($parametros as $item)
                    @guest
                        @else
                            @if(Auth::user()->id == $item->idR)
                            <?php
                                $ban=1;
                                  
                            ?>
                               
                                        <div class="form-group col-4">
                                            <label for="precioBase">Precio Base</label>
                                            <input type="text" name="precioBase" class="form-control" value="{{$item->precioBase}}" readonly>
                                            <label for="personasBase">Número de personas Base</label>
                                            <input type="text" name="personasBase" class="form-control" value="{{$item->personasBase}}" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label for="precioMedio">Precio Medio</label>
                                            <input type="text" name="precioMedio" class="form-control" value="{{$item->precioMedio}}" readonly>
                                            <label for="personasMedio">Número de personas Medio</label>
                                            <input type="text" name="personasMedio" class="form-control" value="{{$item->personasMedio}}" readonly>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="precioAlto">Precio Alto</label>
                                            <input type="text" name="precioAlto" class="form-control" value="{{$item->precioAlto}}" readonly>
                                            <label for="personaA">Número de personas Alto</label>
                                            <input type="text" name="personasAlto" class="form-control" value="{{$item->personasAlto}}" readonly>

                                        </div>
                                        <div class="form-group col-4">
                                            <label for="precioMax">Precio Maximo</label>
                                            <input type="text" name="precioMax" class="form-control" value="{{$item->precioMax}}" readonly>
                                            <label for="personasMax">Número de personas Maximo</label>
                                            <input type="text" name="personasMax" class="form-control" value="{{$item->personasMax}}" readonly>

                                        </div>

                                        <div class="form-group col-4">
                                            <label for="anticipo">Porcentaje de Anticipo</label>
                                            <input type="text" name="anticipo" class="form-control" value="{{$item->anticipo}}" readonly>
                                            

                                        </div>
                                        <div class="form-group col-4">
                                            <a class="btn btn-dark" type="button" href="/parametros/{{$item->id}}/edit">
                                                Editar parametros
                                            </a>
                                        </div>

                                       
                             
                            @endif
                            
                        @endguest

                      
                            
                    
                @endforeach   

                @guest
                        @else
                            @if($ban == 0 )
                                <a class="btn btn-dark" type="button" href="/parametros/create">
                                    Crear Parametros
                                </a>
                            @endif
                            
                        @endguest
    </div>
@endsection