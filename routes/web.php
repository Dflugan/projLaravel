<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contato/{id?}', ['uses'=>'contatoController@index']);

Route::post('/contato', ['uses'=>'contatoController@criar']);

Route::put('/contato', ['uses'=>'contatoController@editar']);

Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'admin\CursoController@index']);
Route::get('/admin/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'admin\CursoController@adicionar']);
Route::post('/admin/salvar',['as'=>'admin.cursos.salavar','uses'=>'admin\CursoController@salvar']);
Route::get('/admin/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'admin\CursoController@editar']);
Route::put('/admin/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'admin\CursoController@atualizar']);
Route::get('/admin/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'admin\CursoController@deletar']);

/*

adicionar
salvar
editar
atualizar
deletar

*/
