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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'objeto'], function () {
    Route::get('/', 'ObjetoController@index')->name('objeto.index');
    Route::post('/', 'ObjetoController@store')->name('objeto.store');
    Route::get('create', 'ObjetoController@create')->name('objeto.create');
    Route::get('{id?}/edit', 'ObjetoController@edit')->name('objeto.edit');
    Route::put('{id?}', 'ObjetoController@update')->name('objeto.update');
    Route::get('{id?}', 'ObjetoController@show')->name('objeto.show');
    Route::delete('{id?}', 'ObjetoController@destroy')->name('objeto.destroy');
});
Route::group(['prefix' => 'serial'], function () {
    Route::get('/', 'SerialController@index')->name('serial.index');
    Route::post('/', 'SerialController@store')->name('serial.store');
    Route::get('create', 'SerialController@create')->name('serial.create');
    Route::get('{id?}/edit', 'SerialController@edit')->name('serial.edit');
    Route::put('{id?}', 'SerialController@update')->name('serial.update');
    Route::get('{id?}', 'SerialController@show')->name('serial.show');
    Route::delete('{id?}', 'SerialController@destroy')->name('serial.destroy');
});
