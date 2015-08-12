<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'medicion';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = ['id','peso', 'grasa','musculo'];

		protected $fillable = ['id', 'pecho','brazo','ante_brazo','cintura','cadera','muslo','pantorrilla1','abdomen',
						   'supraespinal','subescapular','triceps','muslo_anterior','pantorrilla2','peso','talla',
						   'grasa','musculo', 'objetivo','alimentacion','consideraciones','porcentajeAgua',
						   'grasaViceral','hueso','indice_masa_corporal','frecuencias_cardiaca'];
						   

}
