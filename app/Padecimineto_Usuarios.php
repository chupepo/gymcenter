<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Padecimineto_Usuarios extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'padecimiento_usuario';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = ['id','peso', 'grasa','musculo'];

	protected $fillable = ['id_usuario', 'id_padecimiento','padece','recomendacion'];
						   

}