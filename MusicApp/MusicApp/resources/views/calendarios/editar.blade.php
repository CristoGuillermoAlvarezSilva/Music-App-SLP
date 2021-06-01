@extends('../layouts.app')
@section('title')
    Calendario
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
                <h2>Fecha registrada</h2>
                <p class="text-white">Actualiza los datos de la fecha</p>
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
        <form action="/calendarios/{{$item->id}}" class="form-row"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
           
                <input type="text" name="idR" class="form-control" value="{{Auth::user()->id}}" hidden>
                <input type="text" name="disp" class="form-control" value="Ocupado" hidden>
                    <div class="form-group col-4">
                        <label for="fecha">Fecha ocupada</label>
                        <input type="date" name="fecha" class="form-control" value="{{$item->fecha}}">
                    </div>
                    <div class="form-grup col-4">
                        <label for="inicio">Inicio</label>
                        <input type="time" name="inicio" class="form-control" value="{{$item->inicio}}">

                    </div>
                    <div class="form-grup col-4">
                        <label for="fin">Fin</label>
                        <input type="time" name="fin" class="form-control" value="{{$item->fin}}">
                                
                    </div>
            
            <div class="col-12 text-center">
                <button class="btn btn-warning" type="submit">Actualizar</button>
            </div>

        </form>
    </div>
</section>
</div></div></div>
@endsection

