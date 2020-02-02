<?php

namespace App\Http\Controllers;

use App\Objeto;
use App\Serial;
use App\User;
use Illuminate\Http\Request;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario=User::all();
        $objeto = Objeto::all();
        return view('objetos.home',compact('usuario','objeto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('objetos.create');
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
        $objeto = new Objeto();
        $objeto->nombre = $request->nombre;
        $objeto->apellido = $request->apellido;
        $objeto->modelo = $request->modelo;
        $objeto->save();
        return redirect('objeto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function show($objeto)
    {
        //

        $objeto=Objeto::find($objeto);
        return view('objetos.show',compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function edit($objeto)
    {
        //
        $objeto = Objeto::find($objeto);
        return view('objetos.edit',compact('objeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $objeto)
    {
        //
        $objeto=Objeto::findOrFail($objeto);
        $objeto->nombre = $request->nombre;
        $objeto->apellido = $request->apellido;
        $objeto->modelo = $request->modelo;
        $objeto->save();
        return redirect('objeto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objeto  $objeto
     * @return \Illuminate\Http\Response
     */
    public function destroy($objeto)
    {
        //
        Objeto::destroy($objeto);
        return redirect('objeto');
    }
}
