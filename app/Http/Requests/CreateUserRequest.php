<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre'			=>'required|min:4|max:20',
			'apellido1'			=>'required|min:4|max:20',
			'fecha_nacimiento'	=>'',
			'email'				=>'email|max:40|required',
			'password'			=>'max:20',
			'apellido2'			=>'required|min:4|max:20',
			'cedula'			=>'required|numeric|min:100000000|max:999999999',
			'genero'			=>'required|min:4|max:20',
			'telefono'			=>'required|numeric|min:10000000|max:99999999',
			'direccion'			=>'required|min:4',
			'lugar_nacimiento'	=>'required|min:4|max:20',
			'nacionalidad'		=>'required|min:4',
			'estado_civil'		=>'required|min:4|max:20',
			'profesion'			=>'required|min:4|max:20'
		];
	}

}
