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

<div class="container-fluid">
    <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Artista</h2>
                <p class="text-white">Conoce el artista</p>
                </div>

            </div>
            
            </section><!-- End Contact Section --> 
        </section>
    </div>

    <div class="col-6">
    <section id="services" class="services">

    <div class="section-title">
    </div>

    <div class="container centrar" data-aos="fade-up">
        <div>
            <form action="/representantes/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                @guest  
                    @else
                        @if( Auth::user()->id != $item->idU)
                            <div class='container'>
                                    <div class="row people">
                                    <div class="col-1"></div>
                                        <div class="col-10 item">
                                            <div class="box">
                                                <img class="rounded-circle" src="/{{$item->path}}" width="150">
                                                <h3 class="name">{{$item->nombre}}</h3>
                                                <p class="title">{{$item->tipo}}</p>
                                                <p class="description">{{$item->descripcion}}</p>

                                                <?php
                                                    $video_id = $item->video;
                                                ?>

                                                <div class="col-12 section-title">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="container">
                                                    <br>
                                                    <h3>Agenda</h3>
                                                    <br>
                                                    <div class="row">
                                                    @foreach($calendarios as $cale)
                                                                @guest  
                                                                    @else
                                                                        @if( $item->idU == $cale->idR)
                                                                        <div class="icon-box foSAgenda">
                                                                            <div class="foAgenda">
                                                                                <h4>Fecha ocupada</h4>
                                                                                <label><b>Fecha:&nbsp;</b></label><label >{{$cale->fecha}}</label><br>
                                                                                <label><b>Hora inicio:&nbsp;</b></label><label >{{$cale->inicio}}</label><br>
                                                                                <label><b>Hora fin:&nbsp;</b></label><label >{{$cale->fin}}</label><br>
                                                                            </div>
                                                                            
                                                                        </div>   
                                                                        @endif
                                                                @endguest
                                                            @endforeach
 
                                                    </div>
                                                </div>     
                            </div>
            </div>                         
    </div>
    
</div>
                        
                    @endif
                @endguest
                                
                @guest 
                    @else                      
                        @if(Auth::user()->id == $item->idU)

                            <div class='container'>
                                    <div class="row people">
                                    <div class="col-1"></div>
                                        <div class="col-10 item">
                                            <div class="box">
                                                <img class="rounded-circle" src="/{{$item->path}}" width="150">
                                                <h3 class="name">{{$item->nombre}}</h3>
                                                <p class="title">{{$item->tipo}}</p>
                                                <p class="description">{{$item->descripcion}}</p>

                                                <?php
                                                    $video_id = $item->video;
                                                ?>

                                                <div class="col-12 section-title">
                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="container">
                                                    <br>
                                                    <h3>Agenda</h3>
                                                    <br>
                                                    <div class="row">
                                                    @foreach($calendarios as $cale)
                                                                @guest  
                                                                    @else
                                                                        @if( $item->idU == $cale->idR)
                                                                        <div class="iconbox busyDate">
                                                                            <div class="">
                                                                                <h10>Fecha ocupada</h10><br>
                                                                                <label><b>Fecha:&nbsp;</b></label><label >{{$cale->fecha}}</label><br>
                                                                                <label><b>Hora inicio:&nbsp;</b></label><label >{{$cale->inicio}}</label><br>
                                                                                <label><b>Hora fin:&nbsp;</b></label><label >{{$cale->fin}}</label><br>
                                                                            </div>
                                                                            
                                                                        </div>   
                                                                        @endif
                                                                @endguest
                                                            @endforeach
 
                                                    </div>
                                                </div>
                            </div>
                            <h3>Actualiza los datos de tu artista</h3>

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
</div>
</div>
</div>
  
@endsection
