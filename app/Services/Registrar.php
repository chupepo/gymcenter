<?php namespace App\Services;

use App\User;
use App\TipoUsuario;
use App\Gimnasio_Usuario;
use Validator;
use Auth;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'nombre' => 'required|max:45',
			'apellido1' => 'required|max:45',
			'email' => 'required|email|max:255|unique:users',
			'cedula' => 'required|max:10|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		/* Convierte la fehca en tipo datetime para que se cree con el formato adecuado */
		//$fecha_nacimiento = $this->covertir_Fecha($data['fecha_nacimiento']);

		 $user = User::create([
			'nombre' => $data['nombre'],
			'apellido1' => $data['apellido1'],
			'email' => $data['email'],
			'cedula' => $data['cedula'],
			'imagen' => '/imgs/perfil.gif',
			'password' => bcrypt($data['password']),
		]);

		/*Se crea el tipo deusuario*/
		$this->crear_tipoUsuario($user->id);

		/*Se asigna al usuario a un gimnasio*/
		$this->crear_usuarioGimnasio($user->id);

		return $user;
	}
	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function crear_tipoUsuario($user)
	{
		TipoUsuario::create([
			'id_usuario' => $user,
			'activo'=>false,
			'tipo' => 'usuario'
		]);
	}
		/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function crear_usuarioGimnasio($user_id)
	{
		if (!is_null(\DB::table('gimnasio_usuario')->where('id_usuario', '=', $user_id))) {
       			
       		$gimnasio = \DB::table('gimnasio')->where('id', 1)->first();

       		Gimnasio_Usuario::create([
				'id_usuario' => $user_id,
				'id_gimnasio'=>$gimnasio->id
			]);
    	}
	}

	/**
	 * Convierte la fecha seleccionada en un datatime
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function covertir_Fecha($fecha)
	{
		/*Se convierte en un datetime */
		$date = \DateTime::createFromFormat('d/m/Y H:i A', $fecha);
		return $date;
	}

}
