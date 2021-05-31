
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
                <h2>Cotización guardada</h2>
                <p class="text-white">Información de la cotización</p>
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

        <form action="/cotizaciones" class="form-row" enctype="multipart/form-data">
            @csrf

            <div class="form-group col-4">
                <label for="descripcion">Numero de personas:</label>
                <input type="text" name="descripcion" class="form-control" value="{{$item->num}}" readonly>

            </div>
            <div class="form-group col-4">
                <label for="titulo">Cotización: </label>
                <input type="text" name="titulo" class="form-control" value="{{$item->cotizacion}}" readonly>

            </div>
        
            <div class="form-group col-4">
                <label for="fecha">Anticipo:</label>
                <input type="text" name="text" class="form-control" value="{{$item->anticipo}}" readonly>

            </div>
            
            <div class="form-group col-12">
                <a class="btn btn-warning" href="/perfil">Volver</a>
            </div>

        </form>
    </div>
</section>
</div>
</div>
</div>
@endsection

