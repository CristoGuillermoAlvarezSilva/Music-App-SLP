<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Representante;
use App\User;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $representantes = Representante::all();
     
        return view('representantes.index', compact('representantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generos = Genero::all();
        $error = "";
        return view('representantes.create', compact('generos','error'));
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
        $item = new Representante; 

        $item->idU = $request->idU;
        $item->genero = $request->genero;
      
        $item->tipo = $request->tipo;
        $item->nombre = $request->nombre;
        if($item->nombre == ""){
         
            echo "<script>alert('El nombre de la banda no puede estar vacio');</script>";
            return view('representantes.create');
        }
        $item->descripcion = $request->descripcion;
        if($item->descripcion == ""){
         
            echo "<script>alert('Poner una breve descripción');</script>";
            return view('representantes.create');
        }
        if($imagen = $request->file('imagen')){
            $nombre_imagen = $item->nombre . "_" . date("Y_m_d_H_i_s") . "." . $imagen->extension();
             $imagen->move("imgenes", $nombre_imagen);
             $item->path = "imgenes/" . $nombre_imagen;
        }
        $item->video = $request->video;
        if($item->video == ""){
         
            $item->video = " ";
        }
        
        $item->save();
        return redirect()->route('generos.index');
 
     
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
        $item = Representante::find($id);
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
        $generos = Genero::all();
        $item = Representante::find($id);
        $error = "";
        return view('representantes.editar', compact('generos','error', 'item'));
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
    }

    public function byName($genero) 
    {
       
        
        $genero;

        // $color = "#43016f";

        // $categorias = Categoria::where('nombre', '!=', $nombre)->where('color', $color)->get();
    
        $representantes = Representante::all();
        return view('representantes.index', compact('genero','representantes'));
    }
}