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

// Site
Route::get('/', 'MainController@show');
Route::post('/', 'LoginController@login');

//Portal Administrador
Route::get('/administrador', 'AdministradorController@main');
// Portal Administrador Clientes
Route::get('/administrador/clientes', 'ClienteController@listar');
Route::get('/administrador/clientes/editar/{id}', 'ClienteController@editar');

Route::get('/administrador/liberarClientes', 'ClienteController@pendentes');
Route::get('/administrador/ofertas', 'OfertaController@listar');
Route::get('/administrador/shoppings', 'ShoppingController@listar');
Route::get('/administrador/administradores', 'AdministradorController@listar');
Route::get('/administrador/campanhas', 'CampanhaController@listar');
Route::get('/administrador/sair', 'AdministradorController@sair');

//Portal Lojista
Route::get('/lojista', 'LojistaController@main');