<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\UseUse;

class UserController extends Controller
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
        return view('user.home',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
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
        $usuario=new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        if($request->password == $request->passwordR){
            $usuario->password = bcrypt($request->password);
            $usuario->save();
            return redirect('user')->with("usuario","Exito ingreso");
        }
        return redirect()->route('user.create')->with('usuario','contraseña invalida');
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
        $usuario=User::find($id);
        return view('user.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=User::find($id);
        return view('user.edit',compact('usuario'));
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
        $usuario=User::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        if($request->password == $request->passwordR){
            $usuario->password = bcrypt($request->password);
            $usuario->save();
            return redirect('user')->with("usuario","Exito ingreso");
        }
        return back()->with('usuario','Error de contraseña');
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
        User::destroy($id);
        return redirect('user');
    }
}
