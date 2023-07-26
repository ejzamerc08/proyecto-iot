<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use App\Models\Sensor;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medida = Medida::all();
        return view('dashboard.medida.index', ['medida'=>$medida]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sensor = Sensor::all();
        return view('dashboard.medida.create',['sensor'=>$sensor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           # 'sensor_id'=>'required|min:1|unique:Medidas|max:100',
        ]);
        $medida = new Medida();
        $medida-> sensores_id = $request->input('sensor');
        $medida-> valor = $request->input('valor');
        $medida->save();
        return view('dashboard.medida.message',['msg'=>'Medida creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Medida $medida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $medida = Medida::find($codigo);
        return view('dashboard.medida.edit', ['medida'=>$medida, 'sensor'=>Sensor::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
        ]);
        $medida = Medida::find($id);
        $medida-> sensor_id = $request->input('sensor');
        $medida-> valor = $request->input('valor');
        $medida->save();
        return view('dashboard.medida.message',['msg'=>'Medida modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $medida = Medida::find($codigo);
        $medida->delete();
        return redirect("dashboard/medida");
    }
}
