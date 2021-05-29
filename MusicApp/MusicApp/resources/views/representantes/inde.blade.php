@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
            @extends('../layouts.app')

@section('title')
   Representantes
@endsection

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="section-title">
                <p class="py-md-5"></p>
                <h2>Representantes </h2>
            
            <p>Panel</p>
            </div>
    <table class="table ">
    <thead class="py-2">
        <tr>
          
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Agrupación/Solista</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($representantes as $item)
        <tr>
            <td scope="row">{{$item->nombre}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->tipo}}</td>
      
        </tr>
        @endforeach
    </tbody>
</table>
        </div>

      </div>
      <p class="py-md-5"></p>
      <p class="py-md-5"></p>
      <p class="py-md-5"></p>
      <p class="py-md-5"></p>
      <p class="py-md-5"></p>
      <p class="py-md-5"></p>
    </section>
    <!-- End About Section -->
    

@endsection

    @endif
        @endguest