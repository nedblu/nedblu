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

// ---------------------------------------------

Route::get('/cine/login', function(){
	if(Auth::check()){
		return Redirect::to('/cine/lista');
	}else{
		return View::make('login');
	}
});

Route::post('/cine/login', ['uses' => 'AuthController@login', 'before' => 'attempt']);

Route::get('/cine/logout', ['uses' => 'AuthController@logout', 'before' => 'auth']);

Route::get('/cine/lista', ['before' => 'auth', function(){
	$datos = DB::table('alumno')->orderBy('nombre', 'asc')->get();
	return View::make('cine')->with('datos', $datos);
}]);

Route::get('/cine/lista/editar/{num}', ['before' => 'auth', function($id){
	$data = DB::table('alumno')->where('id', $id)->get();
	return View::make('editar')->with('data', $data);
}]);

Route::get('/cine/lista/eliminar/{num}', ['uses' => 'ListaController@eliminar', 'before' => 'auth']);

Route::post('/cine/lista/agregar', ['uses' => 'ListaController@agregar', 'before' => 'auth']);

Route::post('/cine/lista/actualizar', ['uses' => 'ListaController@actualizar', 'before' => 'auth']);




// ---------------- BLOG SECTION -------------------//
/***************************************************/
Route::group(['prefix' => 'blog'], 
	
	function(){

		//Ruta principal
		Route::get('/', function(){
			return "index";
		});

		//Ruta articulo
		Route::get('/article', function(){
			return "article";
		});
	}
);