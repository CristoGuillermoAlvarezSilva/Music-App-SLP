@extends('../layouts.app')
         
                           
@section('title')
    Editar usuarios
@endsection


@section('content')
    <h3 class="py-4 text-center ">Editar Usuario</h3>
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
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
@endsection

 