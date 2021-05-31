@extends('../layouts.app')
@section('title')
    Generos musicales
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
                <h2>Galeria</h2>
                <p class="text-white">Elige el genero musical que prefieras</p>
                </div>

            </div>

            </section><!-- End Contact Section -->
        </section>
    </div>

    <div class="col-6">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <p class="py-md-3"></p>
                @guest
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <h2>SuperUsuario </h2>
                
                @endif
                    @endguest
            
                <p>Generos</p>
            @guest
                @else
                    @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                    <!--Administrador-->
                <div class="d-flex justify-content-end mb-2">
                    <a href="/generos/create" class="btn btn-warning">
                        Agregar genero
                    <i class="fas fa-plus"></i>
                    </a>
                </div>
                
                @endif
                    @endguest
            </div>


        <div class="row " >
            <!------------------------------------------------------------------------------------------------------------------------------>
            @foreach($generos as $item)
                
                    <div class="" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box gensCard">

                        <h4><a class="gensLink" href="/representantes/byName/{{$item->genero}}">{{$item->genero}}</a></h4>
                        @guest
                            @else
                                @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
                                <br>
                                <div class="row">
                                    <div class="col-5">
                                        <p><a class="btn btn-warning" href="/generos/{{$item->id}}/edit">Editar</a></p>
                                    </div>
                                    <div class="col-6">
                                        <form action="/generos/{{$item->id}}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                @endif
                        @endguest
                        
                        </div>
                    </div>
            @endforeach
        </div>



            
        </div>
    </section>

    </div>
    


  </div>
</div>

    
    
@endsection




 