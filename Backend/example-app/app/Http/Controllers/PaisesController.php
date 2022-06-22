<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paises;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retorna una vista
        return view('principal')->with('paises', Paises::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creacion_tabla');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paises = new paises();

        $paises->nombre = $request->nombre;
        $paises->descripcion = $request->capital;
        $paises->imagen = $request->idioma;
        $paises->precio = $request->poblacion;
        $paises->save();

        return redirect()->route('paises.index');
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
        $paises = Paises::find($id);
        return view('editar_tabla')->with('paises', $paises);
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
        $paises = paises::find($id);
        $paises->nombre = $request->nombre;
        $paises->capital = $request->capital;
        $paises->idioma = $request->idioma;
        $paises->poblacion = $request->poblacion;
        $paises->save();
        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paises = paises::find($id);
        $paises->delete();
        return redirect()->route('paises.index');
    }
}
