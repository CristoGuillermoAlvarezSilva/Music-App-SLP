@extends('../layouts.app')

@section('title')
    Cotizar 
@endsection
@section('content')
<div class="container-fluid centrar">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Cotizacion</h2>
                <p class="text-white">Ingresa los datos solicitados</p>
                </div>

            </div>
            
            </section><!-- End Contact Section --> 
        </section>
    </div>

    <div class="col-6">

    <section id="services" class="services">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        
    </div>
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4">
            <form action="/cotizaciones" class="form-row" method="POST" enctype="multipart/form-data">
            @csrf
        
            <!--Para mostrar el representante seleccionado-->
            <?php
                $idR = $_GET['idR'];
            ?>
                @foreach($representantes as $item)
                    @guest
                        @else
                            @if($item->idU == $idR)
                            <div>
                                <div class="section-title">
                                    <p for="fecha">{{$item->nombre}}</p><br>
                                    <img src="/{{$item->path}}" width="300px" height="300px">
                                </div>
                                
                            
                            @endif
                    @endguest
                @endforeach

                    
                </form>
                <form action="/cotizaciones/create" method="GET" >
                                    <input type="text" name="idR" class="form-control" value="{{$idR}}" hidden>
                                        <labeL for="num">Numero de personas:</labeL>
                                        <input type="text" name="num" id="num"class="form-control">
                                        <labeL for="ciudad">Ciudad:</labeL>
                                        <input type="text" name="ciudad" class="form-control">
                                        <br>
                                        <button class="btn btn-warning" type="submit">Cotizar</button>
                                </form>
                            </div>
        </div>
  
        <div class="col-4"></div>
    
    </div>
</div>
</section>
</div>
</div>
</div>
@endsection


