@guest
    @else
        @if(Auth::user()->rol == "super" || Auth::user()->rol == "Administrador")
            @extends('../layouts.app')

@section('title')
   Usuarios
@endsection

@section('content')
    <h1 class="text-center py-5">Usuarios</h1>
    
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
            <td>
                <form action="/users/{{$item->id}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                    Eliminar
                    </button>
                </form>
            </td>
            @endif
         @endguest
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

    @endif
        @endguest