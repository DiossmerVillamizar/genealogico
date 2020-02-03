<?php

namespace App\Http\Controllers;

use App\Lapiz;
use App\Papel;
use Illuminate\Http\Request;

class LapizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prueba = ['{
            "color":"rojo",
            "marca":"Mongol",
            "graduacion":"2h",}
        '];
        $lapiz = Lapiz::all();
        return view('lapiz.home',compact('lapiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lapiz.create');
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
        $lapiz = new Lapiz();
        $lapiz->color = $request->color;
        $lapiz->marca = $request->marca;
        $lapiz->graduacion = $request->graduacion;
        $lapiz->save();
        return redirect('lapiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lapiz  $lapiz
     * @return \Illuminate\Http\Response
     */
    public function show($lapiz)
    {
        //
        $papel=Papel::find($lapiz);
        $lapiz=Lapiz::find($lapiz);
        return view('lapiz.show',compact('lapiz','papel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lapiz  $lapiz
     * @return \Illuminate\Http\Response
     */
    public function edit($lapiz)
    {
        //
        $lapiz = Lapiz::find($lapiz);
        return view('lapiz.edit',compact('lapiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lapiz  $lapiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lapiz)
    {
        //
        $lapiz =Lapiz::findOrFail($lapiz);
        $lapiz->color = $request->color;
        $lapiz->marca = $request->marca;
        $lapiz->graduacion = $request->graduacion;
        $lapiz->save();
        return redirect('lapiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lapiz  $lapiz
     * @return \Illuminate\Http\Response
     */
    public function destroy($lapiz)
    {
        //Cuidado con $this->destroy(); maquina se relentiza inmediato
        Lapiz::destroy($lapiz);
        return redirect('lapiz');
    }
}
