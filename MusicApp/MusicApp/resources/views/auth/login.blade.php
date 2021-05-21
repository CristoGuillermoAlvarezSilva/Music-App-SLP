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
                <h2>Inicia sesion</h2>
                <p class="text-white">Ingresa a tu cuenta</p>
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

            <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form py-md-5">
            @csrf
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
                <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Tu Contraseña!" data-msg="Porfavor ingrese su Tu Contraseña" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                
                <div class="form-group">
                            <div class="col-md-4">
                                
                            </div>
                </div>
              <div class="mb-3">
                
              </div>
              <div class="form-group row mb-0">
                            <div class="col-md-8 text-center">
                            <div class="text-center"><button type="submit">Inicia sesion!</button></div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
               </div>
               
              
            </form>

          </div>

        </div>

      </div>
    </section>
    </div>
  </div>
</div>
<!-- ======= <div class="form-check">
                                
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Recuerdame!') }}</label>
                                    
                 </div> ======= -->



@endsection

