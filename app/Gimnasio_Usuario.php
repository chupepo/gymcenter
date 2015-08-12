<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Gimnasio_Usuario extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gimnasio_usuario';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_usuario','id_gimnasio'];

}
