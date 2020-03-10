<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\info;

class variosmetodosrecursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = info::all();
        dd($info);  // funcion de debuger de laravel sirve tambienpara ver si manda los datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = new info;
        $info->nombre = "Jose gregorio vasquez";
        $info->descripcion = "estudiante TI";
        $info->save();

        /* otra forma de guardar 
        
        info::create([
            'nombre'=>'Dan',
            'descripcion'=>'Auditor'
        ]); */
        
        return "datos guardados correctamente";
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = info::find($id);
        $info->delete();
        return 'El registro '.$id.' ha sido eliminado';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $info = info::findOrFail($id); //solo por id
        /*$info = info::where('id', $id)->firstOrFail(); para los campos especificos */
        $info = info::find($id);
        $info->nombre = 'J. Daniel';
        $info->descripcion = 'Programador';
        $info->save();
        return 'Datos Actualizados';
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
    }
}
