<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGimnasioUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gimnasio_usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario')->unsigned();
			$table->integer('id_gimnasio')->unsigned();
			$table->timestamps();
			
			$table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('id_gimnasio')->references('id')->on('gimnasio')->onDelete('cascade')->onUpdate('cascade');
			
			$table->primary(array('id_usuario', 'id_gimnasio'));
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gimnasio_usuario');
	}

}
