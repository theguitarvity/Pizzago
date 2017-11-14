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
    return view('welcome',['name'=>'Victor Lopes']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partner', function(){
    return view('owner',['title'=>'Seja um PizzaOwner']);
});
Route::get('/teste', function(){
    return view('testeLogin');
});

Route::get('/sobre', function(){
    return view('sobre');
});