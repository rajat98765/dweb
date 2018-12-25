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
Route::get('/gallery1', function () {
    return view('gallery1');
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

Route::get('/personal-info','PersonalinfoController@create');



Route::post('/personal-info','PersonalinfoController@store');

Route::get('/profile','PersonalinfoController@index');




Route::get('/w-process', function () {
    return view('w-process');
});
Route::get('/w-goals', function () {
    return view('w-goals');
});


Route::get('/w-membership', function () {
    return view('w-membership');
});

Route::get('/w-apply', function () {
    return view('w-apply');
});

Route::get('/w-test', function () {
    return view('w-test');
});

Route::get('/w-faq', function () {
    return view('w-faq');
});