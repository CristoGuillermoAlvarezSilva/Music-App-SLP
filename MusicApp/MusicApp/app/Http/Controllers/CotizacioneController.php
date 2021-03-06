<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Representante;
use App\Parametro;
use App\Cotizacione;
class CotizacioneController extends Controller
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
        $parametros = Parametro::all();
        $cotizaciones = Cotizacione::all();
        return view('cotizaciones.index', compact('cotizaciones', 'representantes', 'parametros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $representantes = Representante::all();
        $parametros = Parametro::all();
        $error = "";
        return view('cotizaciones.create', compact('error', 'representantes', 'parametros'));
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
        $item = new Cotizacione; 
        $item->idR = $request->idR;
        $item->idU = $request->idU;
        $item->num = $request->num;
        if($item->num == "" ){
         
            $item->num = '0';
        }
        $item->ciudad = $request->ciudad;
        if($item->ciudad == "" ){
         
            $item->ciudad = "San Luis Potosí";
        }


        $item->cotizacion = $request->cotizacion;
        $item->anticipo = $request->anti;
        
        $item->save();
        return redirect()->route('users.pefil');
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
        $item = Cotizacione::find($id);
        $error = "";
        return view('cotizaciones.editar', compact('item'));
        
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
        Cotizacione::destroy($id);
       
     
        return redirect()->route('users.pefil');

    }
    public function cotizar()
    {
        //
        $representantes = Representante::all();
        return view('cotizaciones.cotizar',compact('representantes'));
    }
}
