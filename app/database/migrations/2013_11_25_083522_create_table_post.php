<?php

use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('posts', function($table){
			$table->increments('id');
			$table->string('title', 200);
			$table->text('body');
			$table->integer('id_user');
			$table->integer('id_category');
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
		Schema::drop('posts');
	}

}