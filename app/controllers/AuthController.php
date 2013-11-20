<?php

class AuthController extends BaseController{

	public function login()
	{
		$inputs = Input::all();
		$rules = [
			'user' => 'required',
			'pass' => 'required'
		];

		$validator = Validator::make($inputs, $rules);

		if($validator->passes()){

			$user = Input::get('user');
			$pass = Input::get('pass');

			$datauser = [
				'username' => $user,
				'password' => $pass
			];

			if(Auth::attempt($datauser)){
				return Redirect::to('/cine/lista');
			}else{
				return Redirect::to('/cine/login');
			}
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/cine/login');
	}

}