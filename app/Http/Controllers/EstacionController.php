<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use Illuminate\Http\Request;

class EstacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estacion = Estacion::all();
        return view('dashboard.estacion.index', ['estacion'=>$estacion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estacion = Estacion::all();
        return view('dashboard.estacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:1|unique:Estacions|max:100',
        ]);
        $estacion = new Estacion();
        $estacion-> nombre = $request->input('nombre');
        $estacion-> longitud = $request->input('longitud');
        $estacion-> latitud = $request->input('latitud');
        $estacion-> estado = $request->input('estado');
        $estacion->save();
        return view('dashboard.estacion.message',['msg'=>'Estacion creada con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estacion $estacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estacion = Estacion::find($id);
        return view('dashboard.estacion.edit', ['sensor'=>$estacion, 'estacion' => Estacion::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|min:1|max:100',
        ]);
        $estacion = Estacion::find($id);
        $estacion-> nombre = $request->input('nombre');
        $estacion-> longitud = $request->input('longitud');
        $estacion-> latitud = $request->input('latitud');
        $estacion-> estado = $request->input('estado');
        $estacion->save();
        return view('dashboard.estacion.message',['msg'=>'Estacion modificada con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $estacion = Estacion::find($id);
        $estacion->delete();
        return redirect("dashboard/estacion");
    }
}
