<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parametro;
use APP\Representante;

class ParametroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parametros = Parametro::all();
     
        return view('parametros.index', compact('parametros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parametros = Parametro::all();
        $error = "";
        return view('parametros.create', compact('error'));
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
        $item = new Parametro; 

        $item->idR = $request->idR;

        $item->precioBase = $request->precioBase;
        if($item->precioBase == ""){
         
            echo "<script>alert('Debe ingresar al menos el costo base');</script>";
            return view('parametros.create');
        }
        $item->personasBase = $request->personasBase;
        if($item->personasBase == ""){
         
            echo "<script>alert('Debe ingresar al menos un número de personas base');</script>";
            return view('parametros.create');
        }


        $item->precioMedio = $request->precioMedio;
        if($item->precioMedio == ""){
            $item->precioMedio = "0";
           
        }
        $item->personasMedio = $request->personasMedio;
        if($item->personasMedio == ""){
            $item->personasMedio = "0";
          
        }


        $item->precioAlto = $request->precioAlto;
        if($item->precioAlto == ""){
            $item->precioAlto = "0";
           
        }
        $item->personasAlto = $request->personasAlto;
        if($item->personasAlto == ""){
            $item->personasAlto = "0";
          
        }

        $item->precioMax = $request->precioMax;
        if($item->precioMax == ""){
            $item->precioMax = "0";
           
        }
        $item->personasMax = $request->personasMax;
        if($item->personasMax == ""){
            $item->personasMax = "0";
          
        }

        $item->anticipo = $request->anticipo;
        if($item->anticipo == ""){
         
            echo "<script>alert('Debe ingresar un porcentaje de anticipo');</script>";
            return view('parametros.create');
        }
        
        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al ingresar";
            
        }
        return redirect()->route('parametros.index');

        
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
        $item = Paramrtro::find($id);
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
        $item = Parametro::find($id);
        $error = "";
        return view('parametros.editar', compact('item'));
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
        $item = Parametro::find($id);
        $item->idR = $request->idR;

        $item->precioBase = $request->precioBase;
        if($item->precioBase == ""){
         
            echo "<script>alert('Debe ingresar al menos el costo base');</script>";
            return view('parametros.create');
        }
        $item->personasBase = $request->personasBase;
        if($item->personasBase == ""){
         
            echo "<script>alert('Debe ingresar al menos un número de personas base');</script>";
            return view('parametros.create');
        }


        $item->precioMedio = $request->precioMedio;
        if($item->precioMedio == ""){
            $item->precioMedio = "0";
           
        }
        $item->personasMedio = $request->personasMedio;
        if($item->personasMedio == ""){
            $item->personasMedio = "0";
          
        }


        $item->precioAlto = $request->precioAlto;
        if($item->precioAlto == ""){
            $item->precioAlto = "0";
           
        }
        $item->personasAlto = $request->personasAlto;
        if($item->personasAlto == ""){
            $item->personasAlto = "0";
          
        }

        $item->precioMax = $request->precioMax;
        if($item->precioMax == ""){
            $item->precioMax = "0";
           
        }
        $item->personasMax = $request->personasMax;
        if($item->personasMax == ""){
            $item->personasMax = "0";
          
        }

        $item->anticipo = $request->anticipo;
        if($item->anticipo == ""){
         
            echo "<script>alert('Debe ingresar un porcentaje de anticipo');</script>";
            return view('parametros.create');
        }
        
        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al actualizar";
            
        }
        return redirect()->route('parametros.index');
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
}
