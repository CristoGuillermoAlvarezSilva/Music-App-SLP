
@extends('../layouts.app')
@section('title')
    Cotización
@endsection

@section('title')
    Music App
@endsection

@section('content')
    <h3>Corización</h3>
   

    <form action="/cotizaciones" class="form-row" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

      
            <?php
                $idR = $_GET['idR'];    
                $num = $_GET['num'];
                $ciudad = $_GET['ciudad'];
          
           ?>

          

            @foreach($representantes as $item)
                @guest
                    @else
                        @if($item->idU == $idR)
                            <label for="fecha">{{$item->nombre}}</label>
                            <img src="/{{$item->path}}" width="300px" height="200px">
                            <div class="form-group col-4">
                                <label for="titulo">Cotización para {{$num}} personas</label>
                                <label for="titulo">En la ciudad de {{$ciudad}}</label>
   
                            </div>
                        @endif
                @endguest
            @endforeach
               @foreach($parametros as $item)
                @guest
                    @else
                        @if($item->idR == $idR)

                            @guest
                                @else
                                    @if($num <= $item->personasBase)
                                        <div class="form-group col-4">
                                            <label for="titulo">Costo:</label>
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioBase}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>

                                        </div>
                                        
                                @endif
                            @endguest

                            @guest
                                @else
                                    @if($num > $item->personasBase && $num <= $item->personasMedio)
                                    <div class="form-group col-4">
                                            <label for="titulo">Costo:</label>
                                            
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioMedio}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>
                                    </div>
                                    
                                @endif
                            @endguest


                            @guest
                                @else
                                    @if($num > $item->personasMedio && $num <= $item->personasAlto)
                                    <div class="form-group col-4">
                                            <label for="titulo">Costo:</label>
                                            
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioAlto}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>
                                    </div>
                                    
                                @endif
                            @endguest 
                            @guest
                                @else
                                    @if($num > $item->personasAlto && $num <> $item->personasAlto)
                                        <div class="form-group col-4">
                                            <label for="titulo">Costo:</label>
                                            
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioMax}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>
                                        </div>
                                   
                                @endif
                            @endguest 


                        @endif
                @endguest
            @endforeach
            <input type="text" name="idU" class="form-control" value="{{Auth::user()->id}}" hidden>
            <input type="text" name="idR" class="form-control" value="{{$idR}}" hidden>
            <input type="text" name="num" class="form-control" value="{{$num}}" hidden>
            <input type="text" name="ciudad" class="form-control" value="{{$ciudad}}" hidden>
            
       
       
      
        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Guardar Cotización</button>
        </div>
    </form>
@endsection



