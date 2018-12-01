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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/full-width', function () {
    return view('full-width');
});

Route::get('/sidebar-left', function () {
    return view('sidebar-left');
});

Route::get('/sidebar-right', function () {
    return view('sidebar-right');
});

Route::get('/basic-grid', function () {
    return view('basic-grid');
});
