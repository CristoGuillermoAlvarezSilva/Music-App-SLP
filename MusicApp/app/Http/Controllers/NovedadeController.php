<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novedade;

class NovedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $novedades = Novedade::all();
     
        return view('novedades.index', compact('novedades'));
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
        return view('novedades.create', compact('error'));
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
        $item = new Novedade; 
        $item->idR = $request->idR;
        $item->titulo = $request->titulo;
        if($item->titulo == ""){
         
            echo "<script>alert('Debe ingresar un titulo de la novedad');</script>";
            return view('novedades.create');
        }
        $item->descripcion = $request->descripcion;
        if($item->descripcion == ""){
         
            echo "<script>alert('Debe ingresar una descripcion de la novedad');</script>";
            return view('novedades.create');
        }
        $item->fecha = $request->fecha;
        if($item->fecha == ""){
         
            echo "<script>alert('Debe ingresar una fecha');</script>";
            return view('novedades.create');
        }
        $item->video = $request->video;
        if($item->video == ""){
         
            $item->video = " ";
        }
        
        $item->save();
        return redirect()->route('novedades.index');
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
        $item = Novedade::find($id);
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
        $item = Novedade::find($id);
        $error = "";
        return view('novedades.editar', compact('item'));
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
        $item = Novedade::find($id);
        $item->idR = $request->idR;
        $item->titulo = $request->titulo;
        if($item->titulo == ""){
         
            echo "<script>alert('Debe ingresar un titulo de la novedad');</script>";
            return view('novedades.create');
        }
        $item->descripcion = $request->descripcion;
        if($item->descripcion == ""){
         
            echo "<script>alert('Debe ingresar una descripcion de la novedad');</script>";
            return view('novedades.create');
        }
        $item->fecha = $request->fecha;
        if($item->fecha == ""){
         
            echo "<script>alert('Debe ingresar una fecha');</script>";
            return view('novedades.create');
        }
        $item->video = $request->video;
        if($item->video == ""){
         
            $item->video = " ";
        }
        
        $item->save();
        return redirect()->route('novedades.index');

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
        Novedade::destroy($id);
       
        return redirect()->route('novedades.index');
    }
}
