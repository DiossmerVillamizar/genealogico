<?php

namespace App\Http\Controllers;

use App\Serial;
use App\Objeto;
use Illuminate\Http\Request;

class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objeto = Objeto::all();
        $serial = Serial::all();
        return view('serial.home',compact('objeto','serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $objeto = Objeto::all();
        return view('serial.create',compact('objeto'));
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
        $serial = new Serial();
        $serial->serial = $request->serial;
        $serial->objeto_id = $request->objeto_id;
        $serial->save();
        return redirect('serial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function show($serial)
    {
        //
        $serial = Serial::find($serial);
        $objeto = Objeto::find($serial);
        return view('serial.show',compact('serial','objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function edit($serial)
    {
        //
        $objeto = Objeto::all();
        $serial = Serial::find($serial);
        return view('serial.edit',compact('objeto','serial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $serial)
    {
        //
        $serial = Serial::findOrfail($serial);
        $serial->serial = $request->serial;
        $serial->objeto_id = $request->objeto_id;
        $serial->save();
        return redirect('serial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serial  $serial
     * @return \Illuminate\Http\Response
     */
    public function destroy($serial)
    {
        //
        Serial::destroy($serial);
        return redirect('serial');
    }
}
