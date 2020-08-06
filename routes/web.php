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

Route::get('/', function(){
    return view('home');
});

Route::get('/register', 'AuthController@register');



Route::get('/welcome, AuthController@welcome_get');

Route:: get('/master', function(){
    return view('master');
});

Route::get('/data-tables', function(){
    return view('data-tables');
});