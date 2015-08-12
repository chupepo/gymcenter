<?php namespace App\Http\Controllers\Padecimientos;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Padecimineto_Usuarios;
use App\Padecimientos;

use App\User;
use Session;
use Auth;

class PadecimientoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Padecimiento Controller
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 * Construcator del PadecimientoController
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/*
	|--------------------------------------------------------------------------
	| Esta funcion guarda los padecimientos de un usarios
	|-------------------------------------------------------------------------- 
	*/
	public function store(Request $request)
	{
		/* Variables */
		$userId = $request->id_usuario;
		$padecimientoId="";
		$recomendacion="";
		$padece = false;
		$i = 0;
		$x = 0;
		//dd($request->all());
		/*Se recorren todos los padecimientos que trea el request y que son los que estan en la vista*/
		foreach ($request->all() as $key => $value) {
			
			/* SE optiene el id del padecimiento */
			$padecimientoUser = $this->getPadecimiento($key);
			//$id_padecimiento = $key
			/* 
			 * Cuando $i es igual 1 es porque ya se encontro el id del padecimiento
			 * y en este momento ya se puede asociar un padecimientos a un usuario
			 */
			if($i==1){
				/* Se optiene la recomendación del padecimiento */
				$recomendacion = $request->all()[$key];

				/*Se crea un array para insertar todoel objeto array en la tabla padecimineto_usuarios */
				$array = ['id_usuario' => $userId,
					  	  'id_padecimiento' => $padecimientoId,
					      'padece' => $padece,
					      'recomendacion' => $recomendacion
				  		];
				/* Se crear un nuevo padecimiento usuario */
				$padecimiento = new Padecimineto_Usuarios($array);
				
				//if($x == 1){
				//	dd($padecimiento);
				//}
				/* Se guarda el nuevo padecimiento */
				$padecimiento->save();

				/* Se dejan de nuevos las variables con los valores por defecto */
				$i = 0;
				$padece = false;
				$padecimientoId="";
				$recomendacion="";
				///$x++;
			}
			/* 
			 * Cuando se encuentra un padecimiento se cargan las variables $padecimientoId 
			 * y si pcede o no de "x" padecimiento
			 */
			if($padecimientoUser != null){
				

				$padecimientoId = $padecimientoUser->id;
				$padece = $this->getPadece($value);
				$i++;

		    }
		}
		return redirect()->back();
	}
	
	/*
	|--------------------------------------------------------------------------
	|  Función que busca el padecimiento por su id 
	|-------------------------------------------------------------------------- 
	*/
	private function getPadecimiento($id){

		/* se busca el padecimiento por su id*/
		$padecimiento = Padecimientos::where('id', $id)->get();
		
		/*Si el padecimientos es diferente de vacio se retorna el id del padecimiento*/		
		if(!empty($padecimiento[0])){
			return $padecimiento[0];
		}
		//var_dump(null);
		return null;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Function que cambia a true o false dependiendo del valor que trae en el request
	|--------------------------------------------------------------------------------
	*/
	private function getPadece($padece){
		
		if($padece != "false"){
			return true;
		}
		return false;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Function que llama a todos los padecimientos
	|--------------------------------------------------------------------------------
	*/
	public function getPadecimientosAll(){
		$padecimientos = Padecimientos::all();
		return $padecimientos;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Function que llama a todos los padecimientos de tiene un usuario
	|--------------------------------------------------------------------------------
	*/
	public function getPadecimientoUusuarios($id){
		$padecimiento = Padecimineto_Usuarios::where('id_usuario', $id)->get();
		return $padecimiento;
	}



	public function getPadecimientoUsuario($id){
		$padecimientos = \DB::table('padecimiento_usuario')
            ->join('padecimientos', 'padecimiento_usuario.id_padecimiento', '=', 'padecimientos.id')
            ->select('padecimiento_usuario.padece', 'padecimiento_usuario.recomendacion', 'padecimientos.padecimiento')
            ->where('padecimiento_usuario.id_usuario', $id)
            ->get();
        return $padecimientos;
	}

	/*
	|--------------------------------------------------------------------------
	|  Función que traer los padecimientos de un usario para poder ser editados
	|-------------------------------------------------------------------------- 
	*/
	public function edit(Request $request){

		if ($request->ajax()){

			$padecimientos = \DB::table('padecimiento_usuario')
            ->join('padecimientos', 'padecimiento_usuario.id_padecimiento', '=', 'padecimientos.id')
            ->select('padecimiento_usuario.padece', 'padecimiento_usuario.recomendacion', 'padecimientos.padecimiento','padecimiento_usuario.id_usuario','padecimiento_usuario.id_padecimiento','padecimientos.id')
            ->where('padecimiento_usuario.id_usuario', $request->id_usuario)
            ->get();
            return json_encode($padecimientos);

		}
	}


	/*
	|--------------------------------------------------------------------------
	|  Función que traer los padecimientos de un usario para poder ser editados
	|-------------------------------------------------------------------------- 
	*/
	public function update(Request $request){

		if ($request->ajax()){

			$arrayUsuariosMorosos = [];

			$padecimientoUser = "";
			$i = 0;
			
			foreach ($request->all() as $key => $value) {

			$padecimientoUser = $this->getPadecimiento($key);
			
			if($padecimientoUser != null){

				$padecimiento = Padecimineto_Usuarios::where('id_usuario',$request->usuario_id)
							->where('id_padecimiento', $padecimientoUser->id)
							->firstOrFail();

				$user = User::where('id_usuario',$request->usuario_id)
							->where('apellido1', 'Gulgowski')
							->firstOrFail();

				\DB::table('padecimiento_usuario')
				            ->where('id_usuario',12)
				            ->where('id_padecimiento', 1)
				            ->update(['recomendacion' => "ssssssssssss"]);


				//$user->nombre = "si";
				//$user->save();						
				//return json_encode($user);


				$padecimiento = Padecimineto_Usuarios::where('id_usuario',12)
							->where('id_padecimiento', 1)
							->firstOrFail();




				//$padecimiento->padece = $this->getPadece($value);
				$padecimiento->recomendacion = "ssssssssssss";
				//$padecimiento->save();
				return json_encode($padecimiento);			
					
				}else{

					if($i >= 2){

						$padecimiento->recomendacion = $request->all()[$key];
						$padecimiento->save();
						
					}

					$i += 1;


				}
			}

			$padecimientos = $this->getPadecimientoUsuario($request->usuario_id);
			





		}else{
			dd("updatessss");
		}
	}
	


}