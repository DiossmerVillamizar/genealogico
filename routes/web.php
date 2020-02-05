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
Route::get('morphMany',function(){
    $post=\App\Post::find(1);
    $video=\App\Video::find(1);
    $comment=\App\Comment::find(1);

    $post->comments()->create(['body'=>"NUEVO REQUEST"]);
    $video->comments()->create(['body'=>"REQUEST request"]);

    foreach ($post->comments as $comment) {
        echo $comment->body."<br>";
    }
    foreach ($video->comments as $comment) {
        echo $comment->body."<br>";
    }
    echo $comment->commentable->title;
});
