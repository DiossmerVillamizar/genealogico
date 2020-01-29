<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function __construct(){
        $this->middleware('EsAdmin');
    }
    public function index(Request $request){
        //return " Si has llegado hasta aqui, eres administrador";
        //$request->session()->put(['Diossmer'=>'Administrador']);
        //session(['Maria'=>'Estudiante']);
        //$request->session()->forget('Diossmer');
        //$request->session()->flush();
        //$request->session()->flash('ESPACIO 2', 'ESO 2');
        //$request->session()->reflash();
        //$request->session()->keep(['Alejandro', 'Administrador']);

        $request->session()->regenerate();
        return $request->session()->all();
    }
}
