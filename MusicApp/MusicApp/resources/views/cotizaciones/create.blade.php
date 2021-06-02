@extends('../layouts.app')
@section('title')
    Cotización
@endsection

@section('title')
    Music App
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Resultado de la cotización</h2>
                <p class="text-white">Contacta a su representante</p>
                </div>

            </div>
            
            </section><!-- End Contact Section --> 
        </section>
    </div>

    <div class="col-6">

    <section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">

    <div class="section-title">
      
    </div>
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4">
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
                        
                            <div class="section-title">
                                <p for="fecha">{{$item->nombre}}</p>
                                
                                <img src="/{{$item->path}}" width="300px" height="200px"><br>
                                <label for="telefono">Telefono para contactar el grupo: {{$item->telefono}}</label><br>
                                <label for="titulo">Cotización para {{$num}} personas</label>
                                <label for="titulo">En la ciudad de {{$ciudad}}</label>
                                <br>

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
                                                <input type="text" name="cotizacion" class="form-control" value="{{$item->precioBase}}" readonly>
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
                
                <button class="btn btn-warning" type="submit">Guardar cotización</button>
            
            </div>
            
        </form>
        </div>

        <div class="col-4"></div>
    
</div>
</section>
</div>
</div>
</div>
@endsection



