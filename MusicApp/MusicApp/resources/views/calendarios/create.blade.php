@extends('../layouts.app')

@section('title')
    MusicApp
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
                        <h2>Agenda</h2>
                        <p class="text-white">Registra una fecha ocupada</p>
                    </div>
                </div>
            </section><!-- End Contact Section -->

    
        </section>
    </div>
    
    <div class="col-6">
        <section id="contact" class="contact">
            <div class="container col-12" data-aos="fade-up">
                
                <div class="row">

                <div class="section-title">
                    <br>
                    <p>Selecciona los datos</p>
                </div>
                    <div class="align-self-center">

                        <form action="/calendarios" class="form-row" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div>
                                <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
                                <input type="text" name="disp" class="form-control" value="Ocupado" hidden>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label for="fecha">Fecha ocupada</label>
                                    <input type="date" name="fecha" class="form-control">
                                </div>

                                <div class="col-4">
                                    <label for="inicio">Inicio</label>
                                    <input type="time" name="inicio" class="form-control">
                                </div>

                                <div class="col-4">
                                    <label for="fin">Fin</label>
                                    <input type="time" name="fin" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="col-12 text-center">
                            <br>
                                <button class="btn btn-warning" type="submit">Guardar</button>
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