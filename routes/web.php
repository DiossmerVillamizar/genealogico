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
Route::group(['prefix' => 'lapiz'], function () {
    Route::get('/', 'LapizController@index')->name('lapiz.index');
    Route::post('/', 'LapizController@store')->name('lapiz.store');
    Route::get('create', 'LapizController@create')->name('lapiz.create');
    Route::get('{id?}/edit', 'LapizController@edit')->name('lapiz.edit');
    Route::put('{id?}', 'LapizController@update')->name('lapiz.update');
    Route::get('{id?}', 'LapizController@show')->name('lapiz.show');
    Route::delete('{id?}', 'LapizController@destroy')->name('lapiz.destroy');
});

Route::group(['prefix' => 'papel'], function () {
    Route::get('/', 'PapelController@index')->name('papel.index');
    Route::post('/', 'PapelController@store')->name('papel.store');
    Route::get('create', 'PapelController@create')->name('papel.create');
    Route::get('{id?}/edit', 'PapelController@edit')->name('papel.edit');
    Route::put('{id?}', 'PapelController@update')->name('papel.update');
    Route::get('{id?}', 'PapelController@show')->name('papel.show');
    Route::delete('{id?}', 'PapelController@destroy')->name('papel.destroy');
});
