<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Genero;
class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $generos = Genero::all();
     
        return view('generos.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $error = "";
        return view('generos.create', compact('error'));
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
        $item = new Genero;
        $item->genero = $request->genero;
        if($item->genero == ""){
         
            echo "<script>alert('El nombre del genero no puede estar vacio');</script>";
            return view('generos.create');
        }

        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imagenes", $nombre_imagen);
             $item->path = "imagenes/" . $nombre_imagen;
        }
        if($item->path == ""){
            echo "<script>alert('Debe agregar una imagen');</script>";
            return view('generos.create');

        }

        $item->save();
        return redirect()->route("generos.index");
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
        $item = Genero::find($id);
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
        $item = Genero::find($id);
        $error = "";
        return view('generos.editar', compact('item'));
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
        $item = Genero::find($id);
        $item->genero = $request->genero;
        if($item->genero == ""){
         
            echo '<script language="javascript">alert("Llenar todos los campos");</script>';

            return view('generos.editar', compact('item'));
        }

        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imagenes", $nombre_imagen);
             $item->path = "imagenes/" . $nombre_imagen;
        }
        if($item->path == ""){
           
            echo '<script language="javascript">alert("Llenar todos los campos");</script>';

            return view('generos.editar', compact('item'));
        }

        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al actualizar";
            
        }

        return redirect()->route('generos.index');

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
        Genero::destroy($id);
       
        return redirect()->route('generos.index');
    }
}
