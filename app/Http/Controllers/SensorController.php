<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Sensor;
use App\Models\Estacion;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensor = Sensor::all();
        return view('dashboard.sensor.index', ['sensor'=>$sensor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = Tipo::all();
        $estacion = Estacion::all();
        return view('dashboard.sensor.create',['tipo'=>$tipo, 'estacion'=>$estacion]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:1|unique:Sensors|max:100',
        ]);
        $sensor = new Sensor();
        $sensor-> nombre = $request->input('nombre');
        $sensor-> serial = $request->input('serial');
        $sensor-> descripcion = $request->input('descripcion');
        $sensor-> tipos_id = $request->input('tipo');
        $sensor-> estacions_id = $request->input('estacion');
        $sensor->save();
        return view('dashboard.sensor.message',['msg'=>'Sensor creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $sensor = Sensor::find($codigo);
        return view('dashboard.sensor.edit', ['sensor'=>$sensor, 'tipo'=>Tipo::all(), 'estacion'=>Estacion::all() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'nombre'=>'required|min:1|max:100',
            
        ]);
        $sensor = Sensor::find($id);
        $sensor-> titulo = $request->input('nombre');
        $sensor-> serial = $request->input('serial');
        $sensor-> estacions_id = $request->input('estacion');
        $sensor-> tipos_id = $request->input('tipo');
        $sensor->save();
        return view('dashboard.sensor.message',['msg'=>'Sensor modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $sensor = Sensor::find($codigo);
        $sensor->delete();
        return redirect("dashboard/sensor");
    }
}
