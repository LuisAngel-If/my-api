<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restricciones;

class RestriccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $r = Restricciones::all();
        return response()->json(['restricciones'=>$r]);
    }

    public function store(Request $request)
    {
       // $input = $request->all();
        $r = new Restricciones;
        $r->nombre = $request->input('nombre');
        $r->save();
        return response()->json(['message' => 'Registro exitoso']);
    }

    public function edit($id)
    {
        $r = Restricciones::find($id);
        return response()->json(['restricciones'=>$r]);
    }

    public function update(Request $request, $id)
    {
        
        $r = Restricciones::find($id);  
        $r->nombre = $request->input('nombre');
        $r->save();  
        return response()->json(['message' => 'Registro actualizado con éxito']);
    }

    public function destroy($id)
    {
        $r = Restricciones::find($id);  
        $r->delete();  

        return response()->json(['message' => 'Registro eliminado con éxito']);

    }
}
