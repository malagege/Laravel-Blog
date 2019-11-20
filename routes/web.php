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

    $user = \App\User::find(1);
    $posts = $user->posts;

    return view('home')->with('user',$user)->with('posts',$posts);
});

Route::get('/about_me', function () {
    
    $user = \App\User::find(1);

    return view('about_me')->with('user',$user);
});

Route::get('/archive', function () {

    $user = \App\User::find(1);
    $posts = $user->posts;

    $group_posts = $posts->groupBy(function($item,$key){
        return substr($item->created_at,0,7);
    });

    return view('archive')->with('group_posts',$group_posts);
});

Route::get('/tag', function () {
    return view('tag');
});

Route::get('/admin/about_me', function () {
    return view('admin.about_me');
});

Route::get('/admin/tag', function () {
    return view('admin.tag');
});

Route::get('/admin/post', function () {
    return view('admin.postlist');
});

Route::get('/admin/post/{id}',function(){
    return view('admin.post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
