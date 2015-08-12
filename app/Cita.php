<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cita';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = ['id','peso', 'grasa','musculo'];

	protected $fillable = ['id', 'id_usuario','fecha_inicio','termina','entrenador','estado'];
}
