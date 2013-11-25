<?php

class BlogController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Blog Controller
	|--------------------------------------------------------------------------
	|
	*/

	public function index()
	{
		
		return View::make('hello');
	}

}