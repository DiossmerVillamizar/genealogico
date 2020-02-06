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
Route::get('morphByMany/{id}', function ($id) {
    // $post = \App\Post::create(["name"=>"NUEVO POST 1"]);
    // $video = \App\Video::create(["name"=>"NUEVO VIDEOS 1"]);
    // $tag = \App\Tag::create(["name"=>"NUEVO ETIQUETA 1"]);
    $post = \App\Post::find($id);
    $video = \App\Video::find($id);
    $tag = \App\Tag::find($id);
    // $tag->videos()->create(['name'=>"NUEVO Video 2"]);
    // $tag->posts()->create(['name'=>"NUEVO Post 2"]);
    // $post->tags()->create(['name'=>"NUEVO Tag 2"]);

    foreach ($post->tags as $tag) {
        echo $tag->name."<br>";
    }
    foreach ($tag->videos as $video) {
        echo $video->name."<br>";
    }
    foreach ($tag->posts as $post) {
        echo $post->name."<br>";
    }
    dd($tag->name,$video->name,$post->name);
});
