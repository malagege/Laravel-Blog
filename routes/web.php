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
    return view('home');
});

Route::get('/about_me', function () {
    return view('about_me');
});

Route::get('/archive', function () {
    return view('archive');
});

Route::get('/tag', function () {
    return view('tag');
});

Route::get('/tag', function () {
    return view('tag');
});
