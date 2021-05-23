@extends('../layouts.app')

@section('title')
    Cotizar 
@endsection
@section('content')
<section id="services" class="services">
    <div class="container centrar" data-aos="fade-up">

    <div class="section-title">
        <br>
        <h2>Ingreso de datos</h2>
        <p>Cotizacion</p>
        <h6 for="fecha">Ingresa los siguientes datos para cotizar el siguiente artista</h6>
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
                                <div class="section-title">
                                    <p for="fecha">{{$item->nombre}}</p>
                                    <img src="/{{$item->path}}" width="300px" height="200px">
                                </div>
                            @endif
                    @endguest
                @endforeach
            </form>
        </div>

        <div class="col-4"></div>
   </div>

   <div class="container row">
        <div class="col-4"></div>

        <div class="col-4">
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

        <div class="col-4"></div>
    </div>
    
    </div>
</div>
</section>
@endsection


