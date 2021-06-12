<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;
use App\Representante;
class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

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
        return view('calendarios.create', compact('error'));
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
        $error = "";
        $item = new Calendario; 
        $item->idR = $request->idR;
        $item->fecha = $request->fecha; 
        if($item->fecha == ""){
         
            echo '<script language="javascript">alert("Debe llenar todos los campos");</script>';
            return view('calendarios.create', compact('error'));
            
        }
        $item->inicio = $request->inicio;
        if($item->inicio == ""){
         
            echo '<script language="javascript">alert("Debe llenar todos los campos");</script>';
            return view('calendarios.create', compact('error'));
            
        }
        $item->fin = $request->fin;
        if($item->fin == ""){
         
            echo '<script language="javascript">alert("Debe llenar todos los campos");</script>';
            return view('calendarios.create', compact('error'));
            
        }
        $item->disp = $request->disp;

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
        $item = Calendario::find($id);

        $error = "";
        return view('calendarios.editar', compact('error', 'item'));

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
        $item = Calendario::find($id); 
        $item->idR = $request->idR;
        $item->fecha = $request->fecha;
        $item->inicio = $request->inicio;
        $item->fin = $request->fin;
        $item->disp = $request->disp;

        $item->save();
        return redirect()->route('users.pefil');

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
        Calendario::destroy($id);
       
        return redirect()->route('generos.index');
    }
}
