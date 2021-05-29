@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
    @if($error != "")
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endif

    <section id="services" class="services">

    <div class="container centrar" data-aos="fade-up">
        <div>
            <form action="/representantes/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                @guest  
                    @else
                        @if( Auth::user()->id != $item->idU)
                            <div class='row '>
                                <div class="col-12 section-title">
                                    <br>
                                    <h2>{{$item->tipo}} </h2>
                                    <p>{{$item->nombre}}</p>
                                </div>

                                <div class='col-12 section-title'>
                                    <img src="/{{$item->path}}" alt="" width="300px" height="250px">
                                    <br><br><br>
                                    <h5 for="des">{{$item->descripcion}}</h1>
                                </div>
                                
                                <?php
                                    $video_id = $item->video;
                                ?>

                                <div class="col-12 section-title">
                                    <h6>Si quieres conocer la banda o artista, ve el siguiente video</h6><br>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <div>
                                        <label>Fechas Ocupadas</label>
                                        @foreach($calendarios as $cale)
                                        @guest  
                                            @else
                                                @if( $item->idU == $cale->idR)
                                                    <h4>Fechas ocupadas</h4>
                                                    <label>Fecha: {{$cale->fecha}}</label>
                                                    <label>Hora inicio: {{$cale->inicio}}</label>
                                                    <label>Hora fin: {{$cale->fin}}</label>

                                                    
                                            @endif
                                        @endguest
                                    @endforeach
                                </div>
                            </div>
                        
                        
            

                          
                    @endif
                @endguest
                                
                @guest 
                    @else                      
                        @if(Auth::user()->id == $item->idU)
                            <input type="text" name="idU" class="form-control" value="{{Auth::user()->id}}" hidden>
                            <div class="form-group col-4">
                                <label for="tipo">Solista o Agrupación</label>
                                <select name="tipo" class="form-control">
                                        <option>Solista</option></option>
                                        <option >Agrupación</option>
                                </select>

                            </div>
                            <div class="form-group col-4">
                                <label for="nombre">Nombre Banda/Solista</label>
                                <input type="text" name="nombre" class="form-control" value="{{$item->nombre}}">

                            </div>
                            <div class="form-group col-4">
                                <label for="genero">Genero Musical</label>
                                <select name="genero" class="form-control">
                                @foreach($generos as $genero)
                                    <option value="{{$genero->genero}}">{{$genero->genero}}</option>
                                @endforeach
                                </select>

                            </div>
                            <div class="form-group col-4">
                                <label for="nombre">Descripción</label>
                                <input type="text" name="descripcion" class="form-control " value="{{$item->descripcion}}" >

                            </div>
            
                            <div class="form-group col-10">
                                <label for="imagen">Imagen</label>
                                <input type="file" name="imagen" class="form-control" value="{{$item->path}}">

                            </div>
               
                            <div class="form-group col-10">
                                <label for="video">Video de Youtube</label>
                                <input type="text" name="video" class="form-control" value="{{$item->video}}">

                            </div>
                            <div class="form-group col-10">
                                <label for="telefono">Número de telefono para contactar</label>
                                <input type="text" name="telefono" class="form-control" value="{{$item->telefono}}">

                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-warning" type="submit">Actualizar</button>
                            </div>

                    @endif
                @endguest
            </form>
            @guest  
                @else
                    @if( Auth::user()->id != $item->idU)
                        <form action="/cotizar" method="GET">
                            <input type="text" name="idR" class="form-control" value="{{$item->idU}}" hidden>
                            <div class="col-12 text-center">
                                <button class="btn btn-warning" type="submit">Cotizar evento</button>
                            </div>
                        </form>
                @endif
            @endguest
      

            
        </div>
    </div>
    
    </section>
    
  
@endsection
