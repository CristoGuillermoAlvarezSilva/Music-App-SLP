@extends('../layouts.app')

@section('title')
    MusicApp
@endsection

@section('content')
<?php 
header('HTTP/1.0 403 Forbidden');
exit();
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Representante</h2>
                <p class="text-white">Registra un Grupo/Artista</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->
 
        </section>
    </div>

    <div class="col-6">   
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <br>
            <p>Ingresa los datos</p>
        </div>
      

          <form action="/representantes" class="form-row" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
            
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
                    <input type="text" name="nombre" class="form-control">

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
                    <input type="text" name="descripcion" class="form-control">

                </div>
            
                <div class="form-group col-10">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" class="form-control">

                </div>
                <div class="form-group col-10">
                    <label for="video">Video de Youtube</label>
                    <input type="text" name="video" class="form-control">

                </div>
                <div class="form-group col-10">
                    <label for="telefono">Número de telefono para contactar</label>
                    <input type="text" name="telefono" class="form-control">

                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-warning" type="submit">Registrar</button>
                </div>
            </form>

          </div>

        </div>

      </div>
    </section>
    </div>
  </div>
</div>

   

    
@endsection
