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

    $post = \App\Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);

    $post = \App\Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();

    $post = \App\Post::find(1);
    $post->delete();

    \App\Post::destroy(2);

    \App\Post::destroy(3, 5, 7);


    $post = \App\Post::find(4);
    $post->update([
        'is_feature' => '1'
    ]);


    $allPosts = \App\Post::all();
    dd($allPosts);

    $featuredPosts = \App\Post::where('is_feature', 1)->get();
    dd($featuredPosts);

    $fourthPost = \App\Post::find(4);
    dd($fourthPost);
    */
    $lastPost = \App\Post::orderBy('id', 'DESC')->first();
    dd($lastPost);

    return view('welcome');
});
