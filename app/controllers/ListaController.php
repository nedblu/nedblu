<?php

class ListaController extends BaseController{

	public function agregar()
	{
		$inputs = Input::all();
		$rules = [
			'nocuenta' => 'required|numeric',
			'nombre' => 'required',
			'escuela' => 'required',
			'pelis' => 'required|numeric'
		];

		$validator = Validator::make($inputs, $rules);

		if($validator->passes()){

			$nocuenta = Input::get('nocuenta');
			$nombre = Input::get('nombre');
			$escuela = Input::get('escuela');
			$pelis = Input::get('pelis');

			DB::table('alumno')->insert([
				'nocuenta' => $nocuenta,
				'nombre' => $nombre,
				'escuela' => $escuela,
				'peliculas' => $pelis
			]);

			return Redirect::to('/cine/lista')->with([
	    		'msg' => 'Datos agregados...'
	    	]);

		}

		return Redirect::to('/cine/lista')->with([
    		'msg' => 'Datos NO guardados...'
    	]);

	}

	public function actualizar(){
		$inputs = Input::all();
		$rules = [
			'nocuenta' => 'required|numeric',
			'nombre' => 'required',
			'escuela' => 'required',
			'pelis' => 'required|numeric'
		];

		$validator = Validator::make($inputs, $rules);

		if($validator->passes()){

			$id = Input::get('id');
			$nocuenta = Input::get('nocuenta');
			$nombre = Input::get('nombre');
			$escuela = Input::get('escuela');
			$pelis = Input::get('pelis');

			DB::table('alumno')
	            ->where('id', $id)
	            ->update([
	            	'nocuenta' => $nocuenta,
					'nombre' => $nombre,
					'escuela' => $escuela,
					'peliculas' => $pelis
	            ]);

			return Redirect::to('/cine/lista')->with([
	    		'msg' => 'Datos actualizados...'
	    	]);

		}

		return Redirect::to('/cine/lista')->with([
    		'msg' => 'Datos NO ACTUALIZADOS...'
    	]);
	}

	public function eliminar($id){
		DB::table('alumno')->where('id', $id)->delete();
		return Redirect::to('/cine/lista')->with([
    		'msg' => 'Dato Eliminado...'
    	]);
	}
	
}