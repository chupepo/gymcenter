<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Gimnasio extends Model {

		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gimnasio';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','direccion','telefono','nombre'];

}
