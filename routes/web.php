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
Route::get('/contato/{id?}', function ($id = null){
	return 'contato' . $id;
});

Route::post('/contato', function (){
	dd($_POST);
	return 'contato teste formulario via POST';
});

Route::put('/contato', function (){
	dd($_POST);
	return 'contato teste formulario via PUT';
});