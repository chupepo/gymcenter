<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',20);
			$table->string('apellido1',20);
			$table->string('apellido2',20);
			$table->string('cedula',9)->unique();
			$table->string('genero',10);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('telefono', 8);
			$table->string('direccion');
			$table->dateTime('fecha_nacimiento');
			$table->dateTime('fecha_pago');
			$table->integer('dia_de_pago');
			$table->string('tipo_de_pago');
			$table->string('lugar_nacimiento',20);
			$table->string('nacionalidad',20);
			$table->string('estado_civil',20);
			$table->string('profesion',20);
			$table->string('imagen');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
