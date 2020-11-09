<?php

use Illuminate\Support\Facades\Route;

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
    return view('site.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/usuarios', 'UsuarioController@index')->name('admin.usuarios');
Route::get('/admin/usuarios/adicionar', 'UsuarioController@adicionar')->name('admin.adicionar');
Route::post('/admin/usuarios/salvar', 'UsuarioController@salvar')->name('admin.usuarios.salvar');
Route::get('/admin/usuarios/deletar/{id}', 'UsuarioController@deletar')->name('admin.usuarios.deletar');
Route::get('/admin/usuarios/editar/{id}', 'UsuarioController@editar')->name('admin.usuarios.editar');
Route::put('/admin/usuarios/atualizar/{id}', 'UsuarioController@atualizar')->name('admin.usuarios.atualizar');
