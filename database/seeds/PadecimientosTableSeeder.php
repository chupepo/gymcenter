<?php

use Illuminate\Database\Seeder;

class PadecimientosTableSeeder extends Seeder {

	public function run()
	{

		\DB::table('padecimientos')->insert(array(
			'padecimiento' => "Trigliceridos"
		));
		
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Ácido Úrico",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Diabetes",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "PresiÓn Alta",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Alergias",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Asma",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Cancer",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Osteoporosis",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Colitis",
		));
		\DB::table('padecimientos')->insertGetId(array(
			'padecimiento' => "Gastritis",
		));
		// $this->call('UserTableSeeder');
		
	}

}