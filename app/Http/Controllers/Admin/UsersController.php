<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Padecimientos\PadecimientoController;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Medicion;
use Session;
use Auth;

class UsersController extends Controller {
	
	/* variable de tipo PadecimientoController */
	protected $padecimientoController;

	/*
	|--------------------------------------------------------------------------------
	|  Constructor del UsersController
	|--------------------------------------------------------------------------------
	*/
	public function __construct(PadecimientoController $padecimientoController){
		$this->middleware('auth');

		$this->padecimientoController = $padecimientoController;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$users = $this->getUsuarios();

		//return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/*
	|--------------------------------------------------------------------------------
	|  Función busca y envia a la vist el usuario
	|--------------------------------------------------------------------------------
	*/
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return view('admin.users.editar',compact('user'));
	}


	/*
	|--------------------------------------------------------------------------------
	| Con este metodo se actualiza un usuario.
	| Antes de que la función se ejecute, se corren una serie de validaciones
	| si las validaciones cumplen, se comienza a ejecutar esta funcion.
	|--------------------------------------------------------------------------------
	*/
	public function update($id,Request $request,CreateUserRequest $requestUser)
	{
		/*Encontramos el usuario que queremos actualizar*/
		$user = User::findOrFail($id);

		/* Se extrae el campo email del formulario */
		$email = \Request::input('email');

		/* Se extrae el campo de la fecha de nacimiento del formulario */
		$fecha = \Request::input('fecha_nacimiento');

		/* Se extrae el campo de la contraseña del formulario */
		$pass = \Request::input('password');

		/*Se optiene la contraseña del usuario*/
		$pass_user = $user->password;

		/* Debemos varificar el email antes de actualizar el usuario */
		$this->validar_email($email,$user->email,$request);
				
		/*metodo de larevel para actualizar al usuario*/
		$user->fill(\Request::all());

		/* Debemos varificar la contrseña antes de actualizar el usuario */
		$user->password = $this->validar_password($pass,$pass_user);
		
		/*Se convierte en un datetime */
		$date = \DateTime::createFromFormat('Y-m-d H:i:s', $fecha);

		/*Se setea la fecha por una de tipo datetime*/
		$user->fecha_nacimiento = $date;

		/* Se actualiza el usuario el usuario */
		$user->save();

		return \Redirect::to('/home');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

   /* 
	* Si el usuario cambiar de correo electronico se va a verificar
	* que no exista el nuevo correo en la base de datos.
	* Para comprobar si el usuario desea editar el email, se 
	* revisa a ver si el email del formulario, es diferente 
	* al email del usuario que se va a editar.	
	*/
	private function validar_email($email,$userEmail,$request){

		if($email != $userEmail){
			$rules = array(
				'email' => 'email|unique:users,email',
			);

			$this->validate($request,$rules);
		}
	}

   /* 
	* Si el usuario quiere cambiar la contrseña se va a verificar
	* que el input del password sea diferente de empty.
	* Se retorna el password
	*/
	private function validar_password($pass,$pass_user){

		/*se verifica si el usuario desea editar la contraseña*/
		if(!empty($pass)){
			/*Se encrypta la contrseña del formulario*/
			return bcrypt($pass);
		}
		return  $pass_user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function routePerfil($id)
	{

		/*Se optiene la las mediciones del usuario*/
		$mediciones  = Medicion::where('id_usuario', $id)->get();

		/*Se extrae la ultima medición de un usuario*/
        $medicion = $mediciones->last();

        /*Se el usuario */
		$user = User::findOrFail($id);

		/*Se obtiene los padecimiento usuarios de un usuario */
		$padecimiento_usuarios = $users = $this->padecimientoController->getPadecimientoUusuarios($id);

		/*Se obtienen todos los padecimientos*/
		$padecimientos = $users = $this->padecimientoController->getPadecimientosAll();
		
		/*Se carga el que enviará a la vista */
		//$arrayPadecimientos = $this->getArrayPadecimientos($padecimiento_usuarios, $padecimientos);
		$arrayPadecimientos = $this->padecimientoController->getPadecimientoUsuario($id);

		/*Se valida si existe una medición del usuario*/	
		if($medicion){
			/* Se convierte la fecha en formato largo y en español */
			$medicion->fecha = $this->convertDate($medicion->created_at);
		}

		return view('admin.users.perfil',compact('user','medicion','arrayPadecimientos','padecimientos'));
	}
	/*
	|--------------------------------------------------------------------------------
	|  Función convierte una fecha corta en una fecha larga y la retorna
	|--------------------------------------------------------------------------------
	*/
	public function convertDate($date){
		
		$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sábado","Domingo");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		 
		$date = (date($date));
		$diaSemana = date("N", strtotime($date))-1; 

		
		list($anio, $mes, $diahora) = explode("-",$date); 

		list($dia,$hora) = explode(" ",$diahora); 

		$fecha = $dias[$diaSemana]." ".$dia." de ".$meses[$mes-1]." del ".$anio." a las ". $hora;

		return $fecha;	
	}



	public function editarImagen(Request $request)
	{
		//$mime = $request->getMimeType();

		//$picture = $request->image;
		//dd(\Input::file('image')->getClientOriginalName());
		if (\Input::hasFile('image')) {

				/* se optiene el archivo del servidor */
	       		$file = \Input::file('image');
	       		/* se extrae el nombre original del archivo */
	       		$nombre_original = \Input::file('image')->getClientOriginalName();
	       		/* extenciones del archivo que soporta la aplicación*/
	       		$supportedTypes = ['image/jpeg', 'image/png', 'image/gif'];
	       		
	       		/* extencion del archivo*/
	       		$mimeType = $file->getMimeType();

	       		/* se pregunta a ver si cumple con las extenciones que soporta la aplicación */
	       		if (in_array($mimeType, $supportedTypes)) {

	       			/* ruta donde vana estar todas las portos de los usaurios */
	       			$destination_path = public_path().'/imgs/avatars/';
					
	       			/* se extrae los espacio en blanco y se renplasan por un - */
					$newfilename = str_replace(" ","-",$file->getClientOriginalName());
					
					/* ruta donde de van a guadar las imagenes de los usario */
					/* la carpete de cada usaurio se llama igual que su nickname */
					$ruta = $destination_path.Auth::user()->email;
					
					/*
					* varifica si un usuario ya tiene un folder con su nickname
					* si no lo tiene lo crea y si lo tiene solo se le agregan las imagenes
					*/
					if(!file_exists($ruta)){
						mkdir($ruta);
					}
					/* mueve las imagenes a la carpeta del usario*/
					$upload_succes = $file->move($ruta, $newfilename);

					/* Se busca el usuario y se actualiza la imagen del usuario */
					$user = User::find(Auth::id());

					/* Se edita la imagen del usaurio*/
					$user->imagen = '/imgs/avatars/'.Auth::user()->email.'/'.$newfilename;
					/* guarda los cambios */
					$user->save();
	       		}
	       }
	    return \Redirect::to('home');
	}


	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna a todos los usuarios
	|--------------------------------------------------------------------------------
	*/
	public function getUsuarios()
	{
		
		$users = \DB::table('users')
				->where('id','<>', Auth::user()->id)
				->orderBy('nombre','ASC')
				->paginate(5);

		return $users;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna a todos los usuarios sin la paginación
	|--------------------------------------------------------------------------------
	*/
	public function getUsuarioswithoutPaginate()
	{
		
		$users = \DB::table('users')
				->where('id','<>', Auth::user()->id)
				->orderBy('nombre','ASC')
				->get();

		return $users;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna un usuario
	|--------------------------------------------------------------------------------
	*/
	public function getUsuario($id)
	{
		$user = User::find($id);
		return $user;
	}
	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna un usuario con la fecha de pago larga
	|--------------------------------------------------------------------------------
	*/
	public function getUsuarioWithLongPayDate($id)
	{
		$user = User::find($id);
		if($user->fecha_pago != "0000-00-00 00:00:00"){
			$user->fecha_pago = $this->convertDate($user->fecha_pago);	
		}
		
		return $user;
	}
	/*
	|--------------------------------------------------------------------------------
	|  Función que busc un usuario por su id via ajax
	|--------------------------------------------------------------------------------
	*/
	public function getAjaxUsuarioById(Request $request)
	{
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
		    $user = User::where('id', $request->id_usuario)
		    			->get();
            return json_encode($user );
		}
	}

	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna un usuario por ajax
	|--------------------------------------------------------------------------------
	*/
	public function getAjaxUsuario(Request $request)
	{
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
			/* obtenemos la cedula que andamos buscando */
			$cedula = $request->cedula;

			/*buscamos a todos los usuario con comiencen con ese numero de céula*/
		    $finder = User::where('cedula', 'LIKE', '%'.$cedula.'%')
		    			->where('id','<>', Auth::user()->id)
		    			->get();

		    /*Devolvemos elresultado en formato Json*/
			return json_encode( $finder );
		}
	}


	/*
	|--------------------------------------------------------------------------------
	|  Función que busca usuario por su nombre
	|--------------------------------------------------------------------------------
	*/
	public function buscarUsarioPorNombre(Request $request)
	{
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
			/* obtenemos la cedula que andamos buscando */
			$nombre = $request->nombre;

			/*buscamos a todos los usuario con comiencen con ese numero de céula*/
		    $finder = User::where('nombre', 'LIKE', '%'.$nombre.'%')
		    			->where('id','<>', Auth::user()->id)
		    			->get();

		    /*Devolvemos elresultado en formato Json*/
			return json_encode( $finder );
		}
	}



	/*
	|--------------------------------------------------------------------------------
	|  Función que devuelve los usuarios por su dia de pago 
	|--------------------------------------------------------------------------------
	*/
	public function getAjaxUsersByPayDay(Request $request)
	{
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
			/* obtenemos la cedula que andamos buscando */
			$dia_pago = $request->dia_pago;

			/*buscamos a todos los usuario con comiencen con ese numero de céula*/
			/*
		    $users = User::where('dia_de_pago', 'LIKE', '%'.$dia_pago.'%')
		    			->where('id','<>', Auth::user()->id)
		    			->get();
		   	*/

		    $users = User::where('dia_de_pago',$dia_pago)
		    				->where('id','<>', Auth::user()->id)
		    				->get();
			
		    /*Devolvemos elresultado en formato Json*/
			return json_encode( $users );
		}
	}

	/*
	|--------------------------------------------------------------------------------
	|  Función que cambia el valor 0 por no y 1 por si
	|--------------------------------------------------------------------------------
	*/
	private function getPadece($padece){

		if($padece != 0){
			return 'si';
		}
		return 'no';
	}
	/*
	|--------------------------------------------------------------------------------
	|  Función que concatena todos los padecimiento usuarios en un array
	|--------------------------------------------------------------------------------
	*/
	private function getArrayPadecimientos($padecimiento_usuarios, $padecimientos){
		$arrayPadecimientos = [];
 
		foreach ($padecimiento_usuarios as $key => $value) {
    		
    		$padece = $this->getPadece($value->padece);
			$nombrePadecimientos = $padecimientos[$value->id_padecimiento-1]->padecimiento;
			$recomendacion =  $value->recomendacion;
			
    		$array =[
				"padece" => $padece,
				"padecimiento" => $nombrePadecimientos,
				"recomendacion" => $recomendacion
			];

			array_push($arrayPadecimientos, $array);
			
    	};

    	return $arrayPadecimientos;
    	//dd($arrayPadecimientos[0]['padece']);
    	
	}


	/*
	|--------------------------------------------------------------------------------
	|  Función para guardar los datos de pago de un usuario
	|--------------------------------------------------------------------------------
	*/
	public function ajaxSaveDatosPago(Request $request){
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
			$user = User::findOrFail($request->id_usuario);
			
			$user->fecha_pago = $request->fecha_pago;
			$user->dia_de_pago = $request->dia_pago;
			$user->tipo_de_pago = $request->tipo_pago;

			$user->save();
		}else{
			
			$user = User::findOrFail($request->id_usuario);

			$fechadb = $user->created_at;
			list($fechadb,$hora) = explode(" ",$fechadb);

			// Pasa la fecha de la DB a epoch y le aqgrega 7 días
			$tmpBD = explode('-',$fechadb);
			$intBD = mktime(0,0,0,$tmpBD[0],$tmpBD[1],$tmpBD[2]);
			// pasa la fecha actual a epoch
			$fecha = date("Y-m-d");
			$fecha_actual = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
			$fecha = date ( 'Y-m-j' , $fecha_actual );



			
			$tmpHoy = explode('-',$fecha);
			$intHoy = mktime(0,0,0,$tmpHoy[0],$tmpHoy[1],$tmpHoy[2]);
			
			echo $fechadb."<br/><br/>";
			echo $fecha."<br/><br/>";
			// Compara ahora que las fechas son enteror
			if( $intHoy >= $intBD) {
			   dd("si");
			} else {
			   dd("no");
			}
		}
	}
	
	/*
	|--------------------------------------------------------------------------------
	|  funcion que devuelve la fecha actual en la que estamos
	|--------------------------------------------------------------------------------
	*/
	public function getTodayDate(){
		
		$fecha = date('Y-m-d H:m:s');
		
		$fecha_actual = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
		$fecha_actual = date ( 'Y-m-d H:m:s' , $fecha_actual );
		

		return $fecha_actual;
	}
	/*
	|-----------------------------------------------------------------------------------
	|  funcion que devuelve los usuarios que tienen la fecha de pago para el dia de hoy
	|-----------------------------------------------------------------------------------
	*/
	public function getUsersTodayFechaPago(){
		
		$arrayUsuarios = [];

		$users = $this->getUsuarioswithoutPaginate();
		$fecha_actual = $this->getTodayDate();
		

		list($fecha_actual,$hora) = explode(" ",$fecha_actual);
		
		foreach ($users as $key => $user) {
			//dd($user);
			$fecha_pago = $user->fecha_pago;
			
			list($fecha_pago,$hora) = explode(" ",$fecha_pago);
			//echo $fecha_pago."<br/><br/>";
			//echo $fecha_actual."<br/><br/>";

			// Pasa la fecha de la DB a epoch y le aqgrega 7 días
			$fecha_pago = explode('-',$fecha_pago);
			$fecha_pago = mktime(0,0,0,$fecha_pago[0],$fecha_pago[1],$fecha_pago[2]);
						
			$nuew_fecha_actual = explode('-',$fecha_actual);
			$nuew_fecha_actual = mktime(0,0,0,$nuew_fecha_actual[0],$nuew_fecha_actual[1],$nuew_fecha_actual[2]);
			
			// Compara ahora que las fechas son enteror
			if( $fecha_pago == $nuew_fecha_actual) {
			   				
			   	$user->fecha_pago = $this->convertDate($user->fecha_pago);

				array_push($arrayUsuarios, $user);
			}
		}
		return $arrayUsuarios;
	}
	/*
	|-----------------------------------------------------------------------------------
	|  funcion que actualiza la fecha de pago por la nueva fecha de pago
	|-----------------------------------------------------------------------------------
	*/
	public function actualizarFechaPago($id,$nueva_fecha_pago){
		
		$user= $this->getUsuario($id);

		$user->fecha_pago = $nueva_fecha_pago;

		$user->save();
	}

	/*
	|-----------------------------------------------------------------------------------
	|  funcion que carga los usuarios morosos del mes actual
	|-----------------------------------------------------------------------------------
	*/
	public function getUsersMorososActualMonth(){
		
		$arrayUsuariosMorosos = [];

		$users = $this->getUsuarioswithoutPaginate();
		$fecha_actual = $this->getTodayDate();
		
		$dia_pago = null;
		$dia_actual = null;
		
		foreach ($users as $key => $user) {
			
			$fecha_pago = $user->fecha_pago;

			if($fecha_pago != "0000-00-00 00:00:00"){

				$fecha_pago = date($fecha_pago);
				$fecha_actual = date($fecha_actual);

				$user->dia_pago = $this->convertDate($fecha_pago);
				$user->dia_actual = $this->convertDate($fecha_actual);

				if($fecha_actual > $fecha_pago){

					array_push($arrayUsuariosMorosos, $user);
				}
			}
		}
		return $arrayUsuariosMorosos;
	}

	/*
	|-----------------------------------------------------------------------------------
	|  funcion que carga los usuarios que se encuentran al dia con los pagos
	|-----------------------------------------------------------------------------------
	*/
	public function getUsersAlDiaConLosPagos(){
		
		$arrayUsuariosAlDia = [];

		$users = $this->getUsuarioswithoutPaginate();
		$fecha_actual = $this->getTodayDate();
		
		$dia_pago = null;
		$dia_actual = null;
		
		foreach ($users as $key => $user) {
			
			$fecha_pago = $user->fecha_pago;

			if($fecha_pago != "0000-00-00 00:00:00"){

				$fecha_pago = date($fecha_pago);
				$fecha_actual = date($fecha_actual);

				$user->dia_pago = $this->convertDate($fecha_pago);
				$user->dia_actual = $this->convertDate($fecha_actual);

				if($fecha_actual < $fecha_pago){

					array_push($arrayUsuariosAlDia, $user);

				}
			}
		}
		return $arrayUsuariosAlDia;
	}
}
