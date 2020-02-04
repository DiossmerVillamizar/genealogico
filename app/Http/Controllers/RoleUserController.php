<?php

namespace App\Http\Controllers;

use App\Role_User;
use App\User;
use App\Role;
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
        return view('role_user.home');
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
        $role=Role::pluck('name','id')->all();
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
        return redirect('roleuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function show(Role_User $role_User)
    {
        //
        return view('',compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function edit(Role_User $role_User)
    {
        //
        return view('',compact(''));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role_User $role_User)
    {
        //
        return redirect('roleuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role_User $role_User)
    {
        //
        return redirect('roleuser');
    }
}
