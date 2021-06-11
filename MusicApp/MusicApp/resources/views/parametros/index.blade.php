@extends('../layouts.app')
@section('title')
    Pametros
@endsection

<!--Contenido de la pagina-->
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Precios establecidos</h2>
                <p class="text-white">Clic en el botón para configurarlos</p>
                </div>

            </div>
            
            </section><!-- End Contact Section --> 
        </section>
    </div>

    <div class="col-6">
    <section id="services" class="services">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
        <br>
        <p>Parámetros</p>
    </div>
    <!--Todos usuarios-->
   <div class="row">
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
                                        <div class="form-group col-3">
                                            <label for="precioBase">Precio Base</label>
                                            <input type="text" name="precioBase" class="form-control" value="{{$item->precioBase}}" readonly>
                                            <label for="personasBase">Numero de personas Base</label>
                                            <input type="text" name="personasBase" class="form-control" value="{{$item->personasBase}}" readonly>

                                        </div>

                                        <div class="form-group col-3">
                                            <label for="precioMedio">Precio Medio</label>
                                            <input type="text" name="precioMedio" class="form-control" value="{{$item->precioMedio}}" readonly>
                                            <label for="personasMedio">Numero de personas Medio</label>
                                            <input type="text" name="personasMedio" class="form-control" value="{{$item->personasMedio}}" readonly>

                                        </div>
                                        <div class="form-group col-3">
                                            <label for="precioAlto">Precio Alto</label>
                                            <input type="text" name="precioAlto" class="form-control" value="{{$item->precioAlto}}" readonly>
                                            <label for="personaA">Numero de personas Alto</label>
                                            <input type="text" name="personasAlto" class="form-control" value="{{$item->personasAlto}}" readonly>

                                        </div>
                                        <div class="form-group col-3">
                                            <label for="precioMax">Precio Maximo</label>
                                            <input type="text" name="precioMax" class="form-control" value="{{$item->precioMax}}" readonly>
                                            <label for="personasMax">Numero de personas Maximo</label>
                                            <input type="text" name="personasMax" class="form-control" value="{{$item->personasMax}}" readonly>

                                        </div>

                                        <div class="form-group col-3">
                                            <label for="anticipo">Porcentaje de Anticipo</label>
                                            <input type="text" name="anticipo" class="form-control" value="{{$item->anticipo}}" readonly>
                                            

                                        </div>
                                        <div class="col-12 text-center">
                                            <a class="btn btn-warning" type="button" href="/parametros/{{$item->id}}/edit">
                                                Editar
                                            </a>
                                        </div>

                                       
                             
                            @endif
                            
                        @endguest

                      
                            
                    
                @endforeach   

                @guest
                        @else
                            @if($ban == 0 )
                            <div class="container">
                                <a class="btn btn-warning" type="button" href="/parametros/create">
                                    Configurar
                                </a>
                            </div>
                            @endif
                            
                        @endguest
    </div>
</section>
</div>
</div>
</div>
@endsection