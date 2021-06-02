@extends('../layouts.app')
@section('title')
    Pago
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
                <h2>Subscripción</h2>
                <p class="text-white">Obten los beneficios al subscribirte</p>
                </div>

                

            </div>
            </section><!-- End Contact Section -->

            
        </section>

    
    </div>

    <div class="col-6">
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
        <?php
            $ban=0;
        ?>

        

              </p>
                <div class="section-title">
                    <p class="py-md-5"></p>
                    <h2>Pago </h2>
                    
                
                <p>Subscripción</p>
                
                </div>

                @foreach($representantes as $r)
       
                  @guest
                    @else
                      @if(Auth::user()->id == $r->idU)
                        <?php
                          $ban=1;
                        ?>
                        <p>Gracias por formar parte de nuestra comunidad.</p>

                    @endif
                  @endguest
                @endforeach
                
                @guest
                  @else
                    @if($ban == 0 )
                <div id="smart-button-container">
                  <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                  </div>
        </div>
      <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN" data-sdk-integration-source="button-factory"></script>
      <script>
        function initPayPalButton() {
          paypal.Buttons({
            style: {
              shape: 'rect',
              color: 'gold',
              layout: 'vertical',
              label: 'pay',
              
            },

            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"MXN","value":58,"breakdown":{"item_total":{"currency_code":"MXN","value":50},"shipping":{"currency_code":"MXN","value":0},"tax_total":{"currency_code":"MXN","value":8}}}}]
              });
            },

            onApprove: function(data, actions) {
                 location.href = "/representantes/create";

            },

            onError: function(err) {
              console.log(err);
            }
          }).render('#paypal-button-container');
        }
        initPayPalButton();
      </script>

        
     
            
        </div>
    </section>
    @endif
                            
                            @endguest
    </div>
    
   

  </div>
</div>
@endsection





 
