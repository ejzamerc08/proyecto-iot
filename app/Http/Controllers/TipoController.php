<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo = Tipo::all();
        return view('dashboard.tipo.index', ['tipo'=>$tipo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = Tipo::all();
        return view('dashboard.tipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|min:1|unique:Tipos|max:100',
        ]);
        $tipo = new Tipo();
        $tipo-> nombre = $request->input('nombre');
        //$category->id=$request->input('id');
        $tipo->save();
        return view('dashboard.tipo.message',['msg'=>'Tipo creado con exito']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('dashboard.tipo.edit', ['sensor'=>$tipo, 'tipo' => Tipo::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|min:1|max:100',
        ]);
        $tipo = Tipo::find($id);
        $tipo-> nombre = $request->input('nombre');
        //$tipo-> nombre = $request->input('nombre');
        //$post->id=$request->input('id');
        $tipo->save();
        return view('dashboard.tipo.message',['msg'=>'Tipo modificado con exito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $tipo = Tipo::find($codigo);
        $tipo->delete();
        return redirect("dashboard/tipo");
    }
}
