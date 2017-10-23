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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('trabalhadores', 'TrabalhadoreController');

Route::resource('clientes', 'ClienteController');

Route::resource('infraestruturas', 'InfraestruturaController');

Route::resource('projectos', 'ProjectoController');

Route::resource('alocacaos', 'AlocacaoController');

Route::resource('evolucaos', 'EvolucaoController');

Route::resource('itens', 'ItenController');

Route::resource('fases', 'FaseController');

Route::resource('categorias', 'CategoriaController');

Route::resource('produtos', 'ProdutoController');

Route::get('profile','UserController@profile');

Route::post('profile','UserController@udate_foto');