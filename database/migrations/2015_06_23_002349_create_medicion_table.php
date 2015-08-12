<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicion', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();

			$table->double('peso', 15, 2);
			$table->double('talla', 15, 2);
			$table->double('grasa', 15, 2);	
			$table->double('musculo', 15, 2);
			$table->double('pecho', 15, 2);
			$table->double('brazo', 15, 2);	
			$table->double('ante_brazo', 15, 2);
			$table->double('cintura', 15, 2);
			$table->double('cadera', 15, 2);	
			$table->double('muslo', 15, 2);
			$table->double('pantorrilla1', 15, 2);
			$table->double('abdomen', 15, 2);	
			$table->double('supraespinal', 15, 2);
			$table->double('subescapular', 15, 2);
			$table->double('triceps', 15, 2);	
			$table->double('muslo_anterior', 15, 2);
			$table->double('pantorrilla2', 15, 2);
			$table->double('porcentajeAgua', 15, 2);	
			$table->double('grasaViceral', 15, 2);
			$table->double('hueso', 15, 2);
			$table->double('indice_masa_corporal', 15, 2);
			$table->double('frecuencias_cardiaca', 15, 2);
			$table->string('objetivo',225);
			$table->string('alimentacion',225);
			$table->string('consideraciones',225);

			$table->integer('id_usuario')->unsigned();

			$table->timestamps();
			$table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

			$table->primary(array('id', 'id_usuario'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medicion');
	}

}
