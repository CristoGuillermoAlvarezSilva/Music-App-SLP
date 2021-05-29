<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Representante;
use App\Cotizacione;
use App\Parametro;
use App\Calendario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = User::find($id);
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = User::find($id);
        $error = "";
        return view('users.editar', compact('error', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = User::find($id);

        $item->rol = $request->rol;
       
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al actualizar";
            return view('users.editar', compact('error', 'item'));
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);
       
        return redirect()->route('users.index');
    }

    public function admin()
    {
        //
        return view('users.admin');
    }

    public function miPerfil()
    {
        //
        $representantes = Representante::all(); 
        $cotizaciones = Cotizacione::all(); 
        $parametros = Parametro::all();
        $calendarios = Calendario::all();
 
        return view('users.perfil', compact('representantes', 'cotizaciones', 'parametros', 'calendarios'));
    }
}
