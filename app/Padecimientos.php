<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Padecimientos extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'padecimientos';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	//protected $fillable = ['id','peso', 'grasa','musculo'];

	protected $fillable = ['id', 'padecimiento'];
						   

}
