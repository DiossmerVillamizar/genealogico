<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function index(){
        return view('mail.correo');
    }
    public function store(Request $request){
        $message=request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ],[
            'name.required'=>__('I need your name')
        ]);
        Mail::to('Diossmer@gmail.com')->queue(new MessageReceived($message));

        return 'Datos Enviado';
    }
}
