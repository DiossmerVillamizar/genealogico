<?php

namespace App\Http\Controllers;

use App\Lapiz;
use App\Papel;
use Illuminate\Http\Request;

class PapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $papel=Papel::all();
        return view('papel.home',compact('papel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lapiz = Lapiz::all();
        return view('papel.create',compact('lapiz'));
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
        $papel = new Papel();
        $papel->formato=$request->formato;
        $papel->lapiz_id=$request->lapiz_id;
        $papel->save();
        return redirect('papel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function show($papel)
    {
        //
        $lapiz=Lapiz::find($papel);
        $papel=Papel::find($papel);
        return view('papel.show',compact('lapiz','papel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function edit($papel)
    {
        //
        $papel=Papel::find($papel);
        $lapiz=Lapiz::all();
        return view('papel.edit',compact('lapiz','papel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $papel)
    {
        //
        $papel = Papel::findOrFail($papel);
        $papel->formato=$request->formato;
        $papel->lapiz_id=$request->lapiz_id;
        $papel->save();
        return redirect('papel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function destroy($papel)
    {
        //
        Papel::destroy($papel);
        return redirect('papel');
    }
}
