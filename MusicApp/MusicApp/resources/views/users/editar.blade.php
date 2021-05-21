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
                <p class="text-white">Cambia el rol de usuario!</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->

            </div>
        </section>

    <section id="contact" class="contact">
      <div class="container py-md-5" data-aos="fade-up">


        <div class="row mt-5">

                <div class="col-lg-2">
                <div class="info">
                    <div class="address">
                    <img src="assets/img/group.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

          <div class="col-lg-8 mt-5 mt-lg-0 align-self-center py-md-5">

          @if($error != "")
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endif
    <form action="/users/{{$item->id}}" class="form-row" method="POST" enctype="multipart/form-data">
         @csrf
        @method('PUT') 
      
      
        
        @guest
            @else
                @if(Auth::user()->rol == "super")
                <div class="form-group col-4">
                   
                        <input type="text" name="name" class="form-control" value="{{$item->name}}" hidden>
                    </div>
                    <div class="form-group col-4">
           
                        <input type="text" name="email" class="form-control" value="{{$item->email}}" hidden>
                    </div>
                    <div class="form-group col-4">
               
                        <input type="password" name="password" class="form-control" hidden>
                    </div>
            <div class="form-group col-4">
                <label for="rol">Rol: </label>
                <select name="rol" class="form-control">
                    <option >Normal</option>
                    <option >Administrador</option>
                </select>

            </div>

        @endif
        @endguest

        <div class="col-12 text-center">
            <button class="btn btn-warning" type="submit">Registrar!</button>
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


 
