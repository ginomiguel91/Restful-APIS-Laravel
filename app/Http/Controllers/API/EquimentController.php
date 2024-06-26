<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Equiment;
use Illuminate\Http\Request;

class EquimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Equiment::all();
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $equiment= new Equiment();
        $equiment->codigo=$request->codigo;
        $equiment->equipo=$request->equipo;
        $equiment->uso=$request->uso;
        $equiment->descripcion=$request->descripcion;
        $equiment->foto=$request->foto;
        $equiment->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $equiment= Equiment::findOrFail($request->id);

        $equiment->codigo=$request->codigo;
        $equiment->equipo=$request->equipo;
        $equiment->uso=$request->uso;
        $equiment->descripcion=$request->descripcion;
        $equiment->foto=$request->foto;
        $equiment->save();

        return $equiment;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $equiment=Equiment::destroy($request->id);

        return $equiment;
        //
    }
}
