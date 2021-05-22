@extends('../layouts.app')

@section('title')
    Cotizar 
@endsection
@section('content')

<h3>Cotizaciones</h3>
   

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
                            <label for="fecha">{{$item->nombre}}</label>
                            <img src="/{{$item->path}}" width="300px" height="200px">
                        @endif
                @endguest
            @endforeach
           
            
   </form>
   <form action="/cotizaciones/create" method="GET" >

        <input type="text" name="idR" class="form-control" value="{{$idR}}" hidden>
        <div class="form-group col-4">
                <labeL for="num">Numero de personas:</labeL>
                <input type="text" name="num" id="num"class="form-control">
                <labeL for="ciudad">Ciudad:</labeL>
                <input type="text" name="ciudad" class="form-control">

        </div>

        <div class="col-12 text-center">
            <button class="btn btn-success" type="submit">Cotizar</button>
        </div>
    </form>
@endsection


