
@extends('../layouts.app')
@section('title')
    Cotización
@endsection

@section('title')
    Music App
@endsection

@section('content')
<section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">

    <div class="section-title">
        <br>
        <h2>Resultado de la cotización</h2>
        <p>Cotizacion</p>
        <h6 for="fecha">A continuación se encuentra el costo y el porcentaje de anticipo para la contratación del artista</h6>
    </div>
   
    <div>
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
                        
                        <div class="col-4"></div>
                        <div class="col-4 section-title">
                            <p for="fecha">{{$item->nombre}}</p>
                            <img src="/{{$item->path}}" width="300px" height="200px">
                            <label for="titulo">Cotización para {{$num}} personas</label>
                            <label for="titulo">En la ciudad de {{$ciudad}}</label>
        
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
                                     
                                            <label for="titulo">Costo:</label>
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioBase}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>  
                                        
                                @endif
                            @endguest

                            @guest
                                @else
                                    @if($num > $item->personasBase && $num <= $item->personasMedio)
                                   
                                            <label for="titulo">Costo:</label>
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioMedio}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>
                                    
                                @endif
                            @endguest


                            @guest
                                @else
                                    @if($num > $item->personasMedio && $num <= $item->personasAlto)
                                    
                                            <label for="titulo">Costo:</label>
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioAlto}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>                           
                                    
                                @endif
                            @endguest 
                            @guest
                                @else
                                    @if($num > $item->personasAlto && $num <> $item->personasAlto)
                                        
                                            <label for="titulo">Costo:</label>
                                            <input type="text" name="cotizacion" class="form-control" value="{{$item->precioMax}}.00" readonly>
                                            <label for="titulo">Porcentaje de anticipo:</label>
                                            <input type="text" name="anti" class="form-control" value="{{$item->anticipo}}" readonly>
                                
                                @endif
                            @endguest 
                           

                        @endif
                @endguest
            @endforeach
            <input type="text" name="idU" class="form-control" value="{{Auth::user()->id}}" hidden>
            <input type="text" name="idR" class="form-control" value="{{$idR}}" hidden>
            <input type="text" name="num" class="form-control" value="{{$num}}" hidden>
            <input type="text" name="ciudad" class="form-control" value="{{$ciudad}}" hidden><br>
            <button class="btn btn-warning" type="submit">Guardar Cotización</button>
        
        </div>
        
    </form>
    </div>
    
</div>
</section>
@endsection



