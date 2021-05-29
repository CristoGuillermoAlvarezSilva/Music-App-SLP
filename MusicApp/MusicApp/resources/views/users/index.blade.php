@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
            @extends('../layouts.app')

@section('title')
   Usuarios
@endsection

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="section-title">
                <p class="py-md-5"></p>
                <h2>Usuarios </h2>
            
            <p>Panel</p>
            </div>
    <table class="table ">
    <thead class="py-2">
        <tr>
          
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($users as $item)
        <tr>
            <td scope="row">{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->rol}}</td>
            @guest
                @else
                    @if(Auth::user()->rol == "super")
            <td>
                <div class="d-flex justify-content-end mb-2">
                    <a href="/users/{{$item->id}}/edit" class="btn btn-info">
                        Editar Rol
                    </a>
                </div>
                
            </td>
         
            @endif
         @endguest
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