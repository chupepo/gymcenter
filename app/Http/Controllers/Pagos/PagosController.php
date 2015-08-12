<?php namespace App\Http\Controllers\Pagos;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarPagoRequest;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Pagos;
use App\User;


class PagosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(UsersController $usersController)
	{
		/* Se llama a la funcion getUsuarios del UsersController para traer a todos los usuarios*/
		$users = $usersController->getUsersTodayFechaPago();
		$mensaje = "";
		return view('reportes.pagos.index',compact('users','mensaje'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id,UsersController $usersController)
	{
		
		$user = $usersController->getUsuarioWithLongPayDate($id);
		return view('reportes.pagos.cancelar-pago',compact('user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request,GuardarPagoRequest $guardarPagoRequest,UsersController $usersController)
	{
		/* Usuario que va a realizar el pago */
		$user = $usersController->getUsuario($request->id_usuario);

		/* nueva instancia de pagos */
		$pago = new Pagos();

		/*Se agrega los datos correspondientes a instancia de pago*/
		$pago->id_usuario = $user->id;
		$pago->monto = $request->monto;
		$pago->fecha_de_pago = $user->fecha_pago;
		$pago->fecha_actual_del_pago = $this->getFechaActualDePago();

		/*Se guarda el nuevo pago en la base de datos*/
		$pago->save();

		/* una ves que se guarda el pago se debe calcular la nueva fecha del proximo pago */
		$nueva_fecha_pago = $this->getNuevaFechaPago($user->tipo_de_pago,$user->fecha_pago,$user->dia_de_pago);
		
		/*Se actualiza la nueva fecha de pago para el usuario*/
		$usersController->actualizarFechaPago($user->id,$nueva_fecha_pago);

		/* Se llama a la funcion getUsersTodayFechaPago del UsersController para traer a todos los usuarios*/
		$users = $usersController->getUsersTodayFechaPago();

		/*mensaje de exito al guardar el pago*/
		$mensaje = "El pago se realizo correctamente";

		$this->sendPagoEmail($user, $request->monto);

		/*return a las vista index de reportes*/
		return view('reportes.pagos.index',compact('users','mensaje'));
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

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	|--------------------------------------------------------------------------------
	|  funcion que devuelve la fecha actual en la que estamos
	|--------------------------------------------------------------------------------
	*/
	public function getTodayDate(){
		
		$fecha = date('Y-m-j H:m:s');
		
		$fecha_actual = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
		$fecha_actual = date ( 'Y-m-j H:m:s' , $fecha_actual );
		

		return $fecha_actual;
	}
	/*
	|--------------------------------------------------------------------------------
	|  funcion que devuelve la fecha actual en la que estamos
	|--------------------------------------------------------------------------------
	*/
	public function getFechaActualDePago(){
		
		$fecha = date('Y-m-j H:m:s');
		
		$fecha_actual = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
		$fecha_actual = date ( 'Y-m-j H:m:s' , $fecha_actual );
		
		/*Se devuelve la fecha sin Hora*/
		list($fecha_actual,$hora_hoy) = explode(" ",$fecha_actual);

		$fecha_actual .= " 00:00:00";

		return $fecha_actual;
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

	/*
	|--------------------------------------------------------------------------------
	|  Funcion para calcular la proxima fecha de pago
	|--------------------------------------------------------------------------------
	*/
	public function getNuevaFechaPago($tipo_pago,$fecha_de_Pago,$dia_pago){
		
		/*variable de la nueva fecha de pago*/
		$nueva_fecha_pago = null;

		/* Se verifica cual es el tipo de pago del usuario mensual o quincenal*/
		if($tipo_pago == "mensual"){

			/*Devuelve la nueva fucha de pago si el tipo de pago es mensual*/
			$nueva_fecha_pago = $this->getNuevaFechaMensual($fecha_de_Pago,$dia_pago);
		}else{
			/*Devuelve la nueva fucha de pago si el tipo de pago es quincenal*/
			$nueva_fecha_pago = $this->getNuevaFechaQuincenal($fecha_de_Pago);
		}
		/*return de la variable de la nueva fecha de pago*/
		return $nueva_fecha_pago;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Funcion que calcula la siguiente fecha de pago si el tipo de pago es mensual
	|--------------------------------------------------------------------------------
	*/
	public function getNuevaFechaMensual($fecha_de_Pago,$dia_pago){
		
		/*Esta es la fecha de hoy*/
		$fecha_actual = $this->getTodayDate();

		/*Esta es la fecha de pago*/
		$fecha_de_Pago = (date($fecha_de_Pago));

		/*Es el dia que el  usuario escogio para cancelar cada mes*/
		$dia_de_pago = $dia_pago;

		/*esta va hacer la nueva fecha de pago*/
		$siguiente_nueva_fecha_pago =null;

		/*Desfragmentamos la fecha de hoy*/
		list($anio_hoy, $mes_hoy, $dia_hora_hoy) = explode("-",$fecha_actual);
		list($dia_hoy,$hora_hoy) = explode(" ",$dia_hora_hoy);


		/*Desfragmentamos la fecha de Pago*/
		list($anio_pago, $mes_pago, $diahora_pago) = explode("-",$fecha_de_Pago);
		list($dia_pago,$hora_pago) = explode(" ",$diahora_pago); 

		/*Se verificar cual es el mes siguiente*/
		if($mes_hoy < 12){
					
			$siguiente_mes = $mes_hoy +1;
			
			if($siguiente_mes < 10){

				$siguiente_mes = "0".$siguiente_mes;
			}
			
		}else{
			$siguiente_mes = 01;
		}

		/*metodo que devuelve el ultimo dia del mes y año ingresado*/
		$last_number_month = (int)$this->getUltimoDiaMes($anio_hoy,$siguiente_mes);

		/* Esta logica es para calcular la fecha unicamente cuando el mes actual es enero */
		if($dia_de_pago > 28 && $mes_pago == 01 ){
			
			/* Se crea la nueva fecha de pago para el siguiente mes */
			$siguiente_nueva_fecha_pago = $anio_pago.'-'.$siguiente_mes.'-'.$last_number_month.' '.$hora_pago;

		}else{
			
			/* Se valida si el dia de pago de un usuario es mayor al ultimo dia del mes siguiente */
			if($dia_de_pago <= $last_number_month ){

				/*Se le suma a la fecha de pago actual el numero total de dias del siguiente mes, para obtener la nueva fecha*/
				$nuevafecha = strtotime ( '+'.$last_number_month.' day' , strtotime ( $fecha_de_Pago ) ) ;
				$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );

				/*Desfragmentamos la nueva fecha*/
				list($nuevafecha_anio_pago, $nuevafecha_mes_pago, $nuevafecha_diahora_pago) = explode("-",$nuevafecha);
				list($nuevafecha_dia_pago,$nuevafecha_hora_pago) = explode(" ",$diahora_pago);

				/* Se crea la nueva fecha de pago para el siguiente mes */
				$siguiente_nueva_fecha_pago = $nuevafecha_anio_pago.'-'.$nuevafecha_mes_pago.'-'.$dia_de_pago.' '.$nuevafecha_hora_pago;

			}else{
				
				/**
				 * Como el dia de pago es mayor al ultimo dia del mes siguiente se le reste un dia
				 * a la fecha actual de pago
				 **/
				$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha_de_Pago ) ) ;
				$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );

				/**
				 * ahora que se le ha restado un dia al mes actual, ya se puede sumar un mes
				 * a la fecha actual de pago
				 **/
				$nuevafecha = strtotime ( '+1 month' , strtotime ( $nuevafecha )) ;
				$siguiente_nueva_fecha_pago = date ( 'Y-m-j H:m:s' , $nuevafecha );


				/* Se crea la nueva fecha de pago para el siguiente mes */
				$siguiente_nueva_fecha_pago = $anio_pago.'-'.$siguiente_mes.'-'.$last_number_month.' '.$hora_pago;
			}
		}
		/*return de la nueva fecha de pago*/
		return $siguiente_nueva_fecha_pago;
	}

	/*
	|--------------------------------------------------------------------------------
	|  Funcion que calcula la siguiente fecha de pago si el tipo de pago es quincenal
	|--------------------------------------------------------------------------------
	*/
	public function getNuevaFechaQuincenal($fecha_de_Pago){

		/*Esta es la fecha de pago*/
		$fecha_de_Pago = (date($fecha_de_Pago));

		/*esta va hacer la nueva fecha de pago*/
		$siguiente_nueva_fecha_pago =null;


		/*Desfragmentamos la fecha de Pago*/
		list($anio_pago, $mes_pago, $diahora_pago) = explode("-",$fecha_de_Pago);
		list($dia_pago,$hora_pago) = explode(" ",$diahora_pago); 


		/* Esta logica es para calcular la fecha unicamente cuando el mes actual es enero */
		if($mes_pago == 02 && $dia_pago == "15" ){
			
			/*metodo que devuelve el ultimo dia del mes y año ingresado*/
			$last_number_month = (int)$this->getUltimoDiaMes($anio_pago,$mes_pago);

			/* Se crea la nueva fecha de pago para el siguiente mes */
			$siguiente_nueva_fecha_pago = $anio_pago.'-'.$mes_pago.'-'.$last_number_month.' '.$hora_pago;
		}else{
			
			if($dia_pago == "15" ){

				$nuevafecha = strtotime ( '+15 day' , strtotime ( $fecha_de_Pago ) ) ;
				$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );

				/* Se crea la nueva fecha de pago para el siguiente mes */
				$siguiente_nueva_fecha_pago = $nuevafecha;
				
			}else{

				/*metodo que devuelve el ultimo dia del mes y año ingresado*/
				$last_number_month = (int)$this->getUltimoDiaMes($anio_pago,$mes_pago);

				if($last_number_month == 31){
					
					$nuevafecha = strtotime ( '+16 day' , strtotime ( $fecha_de_Pago ) ) ;
				}else{
					
					$nuevafecha = strtotime ( '+15 day' , strtotime ( $fecha_de_Pago ) ) ;	
				}

				$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );

				$siguiente_nueva_fecha_pago = $nuevafecha;
			}
		}

		/*return de la nueva fecha de pago*/
		return $siguiente_nueva_fecha_pago;		
	}

	/*
	|--------------------------------------------------------------------------------
	|  Funcion que devuelve el ultimo dia del mes y año ingresado
	|--------------------------------------------------------------------------------
	*/
	public	function getUltimoDiaMes($elAnio,$elMes) {
	  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
	}


	/*
	|--------------------------------------------------------------------------------
	|  funcion que muestra la vista para realiar un pago
	|--------------------------------------------------------------------------------
	*/
	public function realizarPago() {
	  	
	  	return view('reportes.pagos.realizar-pago-user');
	}

	/*
	|--------------------------------------------------------------------------------
	|  funcion que carga la vista con losusuario morosos
	|--------------------------------------------------------------------------------
	*/
	public function getMorosos(UsersController $usersController) {
	  	
	  	
		$users = $usersController->getUsersMorososActualMonth();
		//$users = $usersController->getUsersMorososActualMonth();
	  	return view('reportes.pagos.morosos',compact('users'));
	}
	/*
	|--------------------------------------------------------------------------------
	|  funcion que carga la vista con los usuario que se encuentran al dia con los pagos
	|--------------------------------------------------------------------------------
	*/
	public function getAlDia(UsersController $usersController) {
	  	
	  	
		$users = $usersController->getUsersAlDiaConLosPagos();

	  	return view('reportes.pagos.alDia',compact('users'));
	}

	/*
	|--------------------------------------------------------------------------------
	|  funcion que envia un correo una vez que se realiza un pago
	|--------------------------------------------------------------------------------
	*/
	public function sendPagoEmail($user, $monto)
	{	
		$msg = "El Gimnasio Fitness Center agradece su pago de mes";
			
		Mail::send('emails.pagosPendiente',["msg" => $msg,"nombre"=>$user->nombre,"monto"=>$monto],function($message) use($user)
		{
			$message->to($user->email, $user->nombre);
			
			$message->from('gimnaciofitnesscenter@gmail.com');
			
			$message->subject("Pago del Gimnnasio Fitness Center");
		});
	}

	public function consulta()
	{	

		//$orders_this_month = Order::where( \DB::raw('pagos(fecha_actual_del_pago)', '=', date('2015-08-15') ))->get();

		//$users = $orders_this_month;

		//$fecha_entrada = strtotime("19-11-2008 21:00:00")
		$nuevafecha = '2015-08-07';

		//dd($nuevafecha);

		//$pagos = \DB::table('pagos')
        //            ->whereBetween('fecha_actual_del_pago', array($nuevafecha, $nuevafecha))->get();


        $pagos = \DB::table('users')
            ->join('pagos', 'users.id', '=', 'pagos.id_usuario')
            ->select('pagos.id','pagos.monto','users.nombre','users.apellido1','users.imagen')
            ->whereBetween('pagos.fecha_actual_del_pago', array($nuevafecha, $nuevafecha))
            ->get();
				

		return $pagos;
	}

	public function showIngresos()
	{	
		//dd("sss");
		return view('ingresos.ingresos');
	}

	public function getAjaxTodayIngresos(Request $request)
	{	
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
		   	$fecha_ingresos_hoy = $this->getFechaActualDePago();
        
        	$pagos = \DB::table('users')
	            ->join('pagos', 'users.id', '=', 'pagos.id_usuario')
	            ->select('pagos.id','pagos.monto','users.nombre','users.apellido1','users.imagen')
	            ->whereBetween('pagos.fecha_actual_del_pago', array($fecha_ingresos_hoy, $fecha_ingresos_hoy))
	            ->get();
				
            return json_encode($pagos);
		}
	}
	
	public function getAjaxRangoIngresos(Request $request)
	{	
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
		   	//$fecha_ingresos_hoy = $this->getFechaActualDePago();

		   	$desde =  $request->desde;
		   	$hasta =  $request->hasta;

		   	if($desde == ""){
		   		$desde = $hasta;
		   	}

		   	if($hasta == ""){
		   		$hasta = $desde;
		   	}
		   	
        	
        	$pagos = \DB::table('users')
	            ->join('pagos', 'users.id', '=', 'pagos.id_usuario')
	            ->select('pagos.id','pagos.monto','users.nombre','users.apellido1','users.imagen')
	            ->whereBetween('pagos.fecha_actual_del_pago', array($desde, $hasta))
	            ->get();
				
            return json_encode($pagos);
		}
	}
	
	 
	
}
