<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discapacidades;

class DiscapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $d = Discapacidades::all();
        return response()->json(['discapacidades'=>$d]);
    }

    public function store(Request $request)
    {
       // $input = $dequest->all();
        $d = new Discapacidades;
        $d->nombre = $request->input('nombre');
        $d->save();
        return response()->json(['message' => 'Registro exitoso']);
    }

    public function edit($id)
    {
        $d = Discapacidades::find($id);
        return response()->json(['discapacidades'=>$d]);
    }

    public function update(Request $request, $id)
    {
        
        $d = Discapacidades::find($id);  
        $d->nombre = $request->input('nombre');
        $d->save();  
        return response()->json(['message' => 'Registro actualizado con éxito']);
    }

    public function destroy($id)
    {
        $d = Discapacidades::find($id);  
        $d->delete();  
        return response()->json(['message' => 'Registro eliminado con éxito']);
    }
}
