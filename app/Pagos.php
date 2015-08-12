<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pagos';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','id_usuario','monto', 'fecha_de_pago','fecha_actual_del_pago'];

}
