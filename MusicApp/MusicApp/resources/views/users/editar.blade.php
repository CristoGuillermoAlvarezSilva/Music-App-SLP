@extends('../layouts.app')
         
                           
@section('title')
    Editar usuarios
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
                <h2>Usuario</h2>
                <p class="text-white">Edita la Cuenta</p>
                </div>

            </div>
            </section><!-- End Contact Section -->
        </section>
    </div>

    <div class="col-6">
    <section id="contact" class="contact">
      <div class="container py-md-5" data-aos="fade-up">


        <div class="row">

                <div class="col-lg-2">
                <div class="info">
                    <div class="address">
                    <img src="assets/img/group.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

          <div class="col-lg-8 align-self-center">

            <form action="/users/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
            
      
        
        @guest
            @else
                @if(Auth::user()->rol == "Administrador")
                    <div class="form-group col-1">
                        <input type="text" name="name" class="form-control" value="{{$item->name}}" hidden>
                    </div>
                    <div class="form-group col-1">
                        <input type="text" name="email" class="form-control" value="{{$item->email}}" hidden>
                    </div>
                    <div class="form-group col-1">
                        <input type="password" name="password" class="form-control" hidden>
                    </div>
                    <div class="form-group col-6">
                        <label for="rol">Rol: </label>
                        <select name="rol" class="form-control">
                            <option >Normal</option>
                            <option >Administrador</option>
                        </select>

                    </div>

        @endif
        @endguest

        <!--Para que el ususario edite su información-->
        <!--Hacer que los usuarios cambien su informacion-->
        @guest 
            @else
                @if(Auth::user()->id == $item->id)
                    
                    <div class="form-group col-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="name" class="form-control" value="{{$item->name}}">
                    </div>
                    <div class="form-group col-4">
                        <label for="correo">Email</label>
                        <input type="text" name="email" class="form-control" value="{{$item->email}}">
                    </div>
                    <div class="form-group col-4">
                        <label for="nombre">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>

            @endif
        @endguest
    
        <div class="col-12 text-center">
            <button class="btn btn-warning" type="submit">Actualizar</button>
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

 