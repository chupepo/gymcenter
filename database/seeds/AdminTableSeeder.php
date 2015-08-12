<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AdminTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$cedula = 200000000;
		for ($i=0; $i <29 ; $i++) { 
			$cedula  = $cedula+10000000;
			$id = \DB::table('users')->insertGetId(array(
				'nombre' => $faker->firstName,
				'apellido1' => $faker->lastName,
				'apellido2' => $faker->lastName,
				'cedula' => $cedula,
				'genero' => 'maculino',
				'email'  => $faker->unique()->email,
				'password' => \Hash::make('123456'),
				'telefono' => '89878685',
				'direccion' => '25mts sur del san comunal',
				'fecha_nacimiento' =>  '2015-05-26 07:14:03',
				'dia_de_pago' => 31,
				'tipo_de_pago' => 'mensual',
				'lugar_nacimiento' => 'ciudad quesada',
				'nacionalidad' => 'costarrisence',
				'estado_civil' => 'soltero',
				'profesion' =>'contador',
				'imagen' => '/imgs/perfil.gif'

			));

			\DB::table('tipoUsuario')->insert(array(
				'id_usuario' => $id,
				'activo'=>true,
				'tipo' => 'usuario'
			));

			\DB::table('gimnasio_usuario')->insert(array(
				'id_usuario' => $id,
				'id_gimnasio' => 1
			));
		}

		// $this->call('UserTableSeeder');
	}

}