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
Route::get('/',['as'=>'site.home','uses'=>'site\HomeController@index']);

Route::get('/login', ['as'=>'site.login', 'uses'=>'site\LoginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'site\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'site\LoginController@entrar']);

Route::get('/contato/{id?}', ['uses'=>'contatoController@index']);

Route::post('/contato', ['uses'=>'contatoController@criar']);

Route::put('/contato', ['uses'=>'contatoController@editar']);

Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'admin\CursoController@index']);
  Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'admin\CursoController@adicionar']);
  Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'admin\CursoController@salvar']);
  Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'admin\CursoController@editar']);
  Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'admin\CursoController@atualizar']);
  Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'admin\CursoController@deletar']);


});
