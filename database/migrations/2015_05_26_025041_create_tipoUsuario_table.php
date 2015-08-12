<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipoUsuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('activo');
			$table->enum('tipo',['admin','usuario']);
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
		Schema::drop('tipoUsuario');
	}

}
