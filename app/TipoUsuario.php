<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tipoUsuario';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_usuario','activo', 'tipo'];

}
