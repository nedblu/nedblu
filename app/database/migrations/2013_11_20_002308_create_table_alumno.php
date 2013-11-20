<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableAlumno extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('alumno', function($table){
			$table->increments('id');
			$table->string('nocuenta');
			$table->string('nombre');
			$table->string('escuela');
			$table->integer('peliculas');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('alumno');
	}

}