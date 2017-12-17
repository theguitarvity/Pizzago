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
    return view('welcome',['name'=>'Victor Lopes', 'bodyBack'=>'body']);
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/partner', function(){
    return view('owner',['bodyBack'=>'ownerBody']);
});

Route::get('/partner/cadastro',function(){
    return view('registerOwner', ['bodyBack'=>'ownerBody']);
});
Route::post('/partner/cadastrar', 'FuncionarioController@create')->name('funcionario');
Route::get('/teste', function(){
    return view('testeLogin');
});

Route::get('/sobre', function(){
    return view('sobre', ['bodyBack'=>'body']);
});

