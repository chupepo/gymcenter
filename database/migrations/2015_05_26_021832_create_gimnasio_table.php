<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGimnasioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gimnasio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',20);
			$table->string('telefono', 8);
			$table->string('direccion');
			$table->integer('id_usuario')->unsigned();
			$table->timestamps();
			$table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gimnasio');
	}

}
