<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medida;

class  MedidaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medida = Medida::all();
        return $medida;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'name'=>'required|min:3|max:100',
        ]);
        $medida = new Medida();
        $medida-> sensores_id = $request->input('sensor');
        $medida-> valor = $request->input('valor');
        $medida->save();
        return $medida;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medida = Medida::find($id);
        return $medida;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'name'=>'required|min:3|max:30',
            // 'description'=>'required|min:2',
        ]);
        $medida = Medida::find($id);
        $medida-> sensor_id = $request->input('sensor');
        $medida-> valor = $request->input('valor');
        $medida->save();
        return $medida;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medida = Medida::find($id);
        if(is_null($medida))
        {
            return response()->json('no se pudo eliminar.');
        }else{
            $medida->delete();
            return ['Eliminado'];
        }
        
    }
}