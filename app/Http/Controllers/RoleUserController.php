<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roleuser=RoleUser::ALL();
        return view('role_user.home',compact('roleuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuario=User::pluck('name','id')->all();
        $role=Role::pluck('cargo','id')->all();
        return view('role_user.create',compact('usuario','role'));
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
        $roleuser = new RoleUser();
        $roleuser->user_id = $request->user_id;
        $roleuser->role_id = $request->role_id;
        if($roleuser->save()){
            return redirect('roleuser')->with('roleuser','Exito al crear.');
        }else{
            back()->with('roleuser','no se pudo Crear');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RoleUser  $roleuser
     * @return \Illuminate\Http\Response
     */
    public function show($roleuser)
    {
        //
        $roleuser = RoleUser::find($roleuser);
        $usuario=User::find($roleuser);
        $role=Role::find($roleuser);
        return view('role_user.show',compact('role','usuario','roleuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RoleUser  $roleuser
     * @return \Illuminate\Http\Response
     */
    public function edit($roleuser)
    {
        //
        $roleuser = RoleUser::find($roleuser);
        $usuario=User::pluck('name','id')->all();
        $role=Role::pluck('cargo','id')->all();
        return view('role_user.edit',compact('role','usuario','roleuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RoleUser  $roleuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $roleuser)
    {
        //
        $roleuser = RoleUser::findOrFail($roleuser);
        $roleuser->user_id = $request->user_id;
        $roleuser->role_id = $request->role_id;
        if($roleuser->save()){
            return redirect('roleuser')->with('roleuser','Actualizacion completada!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RoleUser  $roleuser
     * @return \Illuminate\Http\Response
     */
    public function destroy($roleuser)
    {
        //
        $delete = RoleUser::find($roleuser);
        $delete->delete();
        return redirect('roleuser');
    }
}
