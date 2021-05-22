@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6">
        <section id="hero" class="d-flex align-items-center justify-content-center ">
            
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Registro</h2>
                <p class="text-white">Crea Una Cuenta</p>
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

            <form action="{{ route('register') }}" method="post" role="form" class="php-email-form py-md-5">
            @csrf
            <div class="form-group ">
                  <label for="name" class="col-md-4 col-form-label ">{{ __('Name') }}</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Tu Nombre!" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  value="{{ old('name') }}" required autocomplete="name" autofocus/>
                  <div class="validate"></div>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>
              <div class="form-group">
                  <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Tu Correo!" data-rule="email" data-msg="Porfavor ingrese su correo" value="{{ old('email') }}" required autocomplete="email" />
                  <div class="validate"></div>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Tu Contraseña!"name="password" required autocomplete="new-password" data-rule="minlen:4" data-msg="Porfavor una longitud mayor de 4 caracteres" autofocus/>
                  <div class="validate"></div>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('ConfirmPassword') }}</label>
                  <input  class="form-control " id="password-confirm" type="password"  placeholder="Confirma tu contraseña!"  data-msg="Porfavor ingrese la confirmacion de su ontraseña!" name="password_confirmation" required autocomplete="new-password" />
                  <div class="validate"></div>
                  
                </div>
              </div>
             
              <div class="mb-3">
                <div class="loading">Registrando</div>
                <div class="error-message"></div>
                <div class="sent-message">Exito al registrar,gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Registrar!</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    </div>
  </div>
</div>
<!-- ======= Hero Section ======= -->

<!-- ======= Contact Section ======= -->

   

@endsection
