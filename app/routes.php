<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('nedblu');
});

Route::post('email', 'MailController@email');

Route::get('/servicios', function(){
	return Redirect::to('/#servicios');
});

Route::get('/clientes', function(){
	return Redirect::to('/#clientes');
});

Route::get('/equipo', function(){
	return Redirect::to('/#equipo');
});

Route::get('/contacto', function(){
	return Redirect::to('/#contacto');
});
