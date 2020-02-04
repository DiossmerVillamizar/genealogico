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

Route::get('hasManyThrough/{id}',function($id){
    $post=\App\Post::find($id);
    $user=\App\User::find($id);
    $contry=\App\Country::find($id);
    dd($post->title,$user->name,$contry->name);
});
