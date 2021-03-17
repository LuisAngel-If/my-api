<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadController extends Controller
{
    //

    public function index(){
        $c = Ciudad::all();
        return response()->json(['ciudades'=>$c]);
    }

    public function store(Request $request)
    {
       // $input = $request->all();
        $c = new Ciudad;
        $c->nombre = $request->input('nombre');
        $c->save();
        return response()->json(['message' => 'Registro exitoso']);
    }

    public function edit($id)
    {
        $c = Ciudad::find($id);
        return response()->json(['ciudades'=>$c]);
    }

    public function update(Request $request, $id)
    {
        
        $c = Ciudad::find($id);  
        $c->nombre = $request->input('nombre');
        $c->save();  
        return response()->json(['message' => 'Registro actualizado con éxito']);
    }

    public function destroy($id)
    {
        $c = Ciudad::find($id);  
        $c->delete();  

        return response()->json(['message' => 'Registro eliminado con éxito']);

    }

}
