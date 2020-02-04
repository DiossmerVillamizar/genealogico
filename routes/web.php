<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hasOneThrough',function(){
    $supplier = \App\Supplier::find(2);//true
    $user = \App\User::find(2);//true
    $history = \App\History::find(2);//error

    dd($supplier->history->created_at,$user->history->created_at,$history->created_at);
});
