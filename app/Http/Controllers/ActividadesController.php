<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ac = Actividad::all();
        return response()->json(['actividades'=>$ac]);
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
        $ac = new Actividad;
        $ac->nombre = $request->input('nombre');
        $ac->descripcion = $request->input('descripcion');
        $ac->discapacidad_id = $request->discapacidad_id;
        $ac->save();
        return response()->json(['message' => 'Registro exitoso']);
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
        $ac = Actividad::find($id);
        return response()->json(['actividades'=>$ac]);
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
        $ac = Actividad::find($id); 
        $ac->nombre = $request->input('nombre');
        $ac->descripcion = $request->input('descripcion');
        $ac->discapacidad_id = $request->discapacidad_id;
        $ac->update();  
        return response()->json(['message' => 'Registro actualizado con éxito']);

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
        $ac = Actividad::find($id);  
        $ac->delete();  
        return response()->json(['message' => 'Registro eliminado con éxito']);
    }
}
