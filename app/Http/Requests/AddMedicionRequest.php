<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddMedicionRequest extends Request {

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
			'pecho'				=>'required|numeric',
			'brazo'				=>'required|numeric',
			'ante_brazo'		=>'required|numeric',
			'cintura'			=>'required|numeric',
			'cadera'			=>'required|numeric',
			'muslo'				=>'required|numeric',
			'pantorrilla1'		=>'required|numeric',
			'abdomen'			=>'required|numeric',
			'supraespinal'		=>'required|numeric',
			'subescapular'		=>'required|numeric',
			'triceps'			=>'required|numeric',
			'muslo_anterior'	=>'required|numeric',
			'pantorrilla2'		=>'required|numeric',
			'peso'				=>'required|numeric',
			'grasa'				=>'required|numeric',
			'musculo'			=>'required|numeric',
			'objetivo'			=>'required|min:5|max:255',
			'alimentacion'		=>'required|min:5|max:255',
			'consideraciones'	=>'required|min:5|max:255',

		];
	}

}
