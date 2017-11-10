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
    /*
    \App\Post::create([
        'title' => 'test title',
        'content' => 'test content',
    ]);

    $post	=	new	\App\Post();
    $post->title	=	'test	title2';
    $post->content	=	'test	content2';
    $post->save();

    $post	=	new	\App\Post();
    $post->title	=	'hello3';
    $post->content	=	'thank you3';
    $post->save();

    $posts = \App\Post::all();
    dd($posts);

    $post = \App\Post::find(1);
    dd($post);


    $posts = \App\Post::where('id', '<', 4)->orderBy('id', 'DESC')->get();
    dd($posts);
*/
    $post = \App\Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);
    return view('welcome');
});
