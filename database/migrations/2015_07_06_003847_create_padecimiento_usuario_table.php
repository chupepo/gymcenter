<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadecimientoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('padecimiento_usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario')->unsigned();
			$table->integer('id_padecimiento')->unsigned();
			$table->boolean('padece');
			$table->string('recomendacion',255);
			$table->timestamps();
			
			$table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('id_padecimiento')->references('id')->on('padecimientos')->onDelete('cascade')->onUpdate('cascade');
			
			$table->primary(array('id_usuario', 'id_padecimiento'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('padecimiento_usuario');
	}

}
