<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Representante;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Evento::all();
        $representantes = Representante::all();
     
        return view('eventos.index', compact('eventos', 'representantes'));
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
        return view('eventos.create', compact('error'));
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
        $item = new Evento; 

        $item->idR = $request->idR;
        $item->titulo = $request->titulo;
        if($item->titulo == ""){
         
            echo "<script>alert('Debe ingresar un titulo del evento');</script>";
            return view('eventos.create');
        }
        $item->descripcion = $request->descripcion;
        if($item->descripcion == ""){
         
            echo "<script>alert('Debe ingresar una descripcion del evento');</script>";
            return view('eventos.create');
        }
        $item->lugar = $request->lugar;
        if($item->lugar == ""){
         
            echo "<script>alert('Debe ingresar un lugar del evento');</script>";
            return view('eventos.create');
        }
        $item->fecha = $request->fecha;
        if($item->fecha == ""){
         
            echo "<script>alert('Debe ingresar una fecha del evento');</script>";
            return view('eventos.create');
        }
        $item->hora = $request->hora;
        if($item->hora == ""){
         
            echo "<script>alert('Debe ingresar una hora del evento');</script>";
            return view('eventos.create');
        }
        $item->costo = $request->costo;
        if($item->costo == ""){
         
            $item->costo = '0';
        }



     

        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al ingresar";
            
        }
        return redirect()->route('eventos.index');
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
        $item = Evento::find($id);
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
        $item = Evento::find($id);
        $error = "";
        return view('eventos.editar', compact('item'));
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
        $item = Evento::find($id);

        $item->idR = $request->idR;
        $item->titulo = $request->titulo;
        if($item->titulo == ""){
         
            echo "<script>alert('Debe ingresar un titulo del evento');</script>";
            return view('eventos.create');
        }
        $item->descripcion = $request->descripcion;
        if($item->descripcion == ""){
         
            echo "<script>alert('Debe ingresar una descripcion del evento');</script>";
            return view('eventos.create');
        }
        $item->lugar = $request->lugar;
        if($item->lugar == ""){
         
            echo "<script>alert('Debe ingresar un lugar del evento');</script>";
            return view('eventos.create');
        }
        $item->fecha = $request->fecha;
        if($item->fecha == ""){
         
            echo "<script>alert('Debe ingresar una fecha del evento');</script>";
            return view('eventos.create');
        }
        $item->hora = $request->hora;
        if($item->hora == ""){
         
            echo "<script>alert('Debe ingresar una hora del evento');</script>";
            return view('eventos.create');
        }
        $item->costo = $request->costo;
        if($item->costo == ""){
         
            $item->costo = '0';
        }


        $respuesta = $item->save();
        
        if($respuesta == 0){
            $error= "Erros al ingresar";
            
        }
        return redirect()->route('eventos.index');
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
        Evento::destroy($id);
       
        return redirect()->route('eventos.index');
    }
}
