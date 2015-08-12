<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Session;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre','apellido1','fecha_nacimiento','fecha_pago','dia_de_pago','tipo_de_pago', 'email', 'password','apellido2','cedula','genero','telefono',
							'direccion','lugar_nacimiento','nacionalidad','estado_civil','profesion','imagen'
						  ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function getFullNameAttribute(){
		return $this->nombre. ' '. $this->apellido1. ' '. $this->apellido2;
	}
}






























