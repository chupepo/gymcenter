<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder {

	public function run()
	{
		$id =\DB::table('users')->insertGetId(array(
			'nombre' => 'Andrey',
			'apellido1' => 'Alfaro',
			'apellido2' => 'Aguilar',
			'cedula' => '203460847',
			'genero' => 'maculino',
			'email'  => 'Andrey@gmail.com',
			'password' => \Hash::make('123'),
			'telefono' => '89878685',
			'direccion' => '25mts sur del san comunal',
			'fecha_nacimiento' => '2015-05-26 07:14:03',
			'fecha_pago' => '0000-00-00 00:00:00',
			'lugar_nacimiento' => 'ciudad quesada',
			'nacionalidad' => 'costarrisence',
			'estado_civil' => 'soltero',
			'profesion' => 'contador',
			'imagen' => '/imgs/perfil.gif'
		));

		\DB::table('tipoUsuario')->insert(array(
			'id_usuario' => $id,
			'activo'=>true,
			'tipo' => 'admin'
		));

		$idGimnasio =\DB::table('gimnasio')->insertGetId(array(
			'id_usuario' => $id,
			'nombre' => 'Gimnasio Fitness Center',
			'direccion' => "san antonio a la par del depatamento de policias",
			'telefono' => '81828384'
		));		
		// $this->call('UserTableSeeder');
		\DB::table('gimnasio_usuario')->insert(array(
			'id_usuario' => $id,
			'id_gimnasio' => $idGimnasio
		));
	}

}