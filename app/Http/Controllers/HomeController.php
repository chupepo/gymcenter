<?php namespace App\Http\Controllers;

use App\Http\Controllers\Padecimientos\PadecimientoController;
use App\Http\Controllers\Medicion\MedicionController;
use Illuminate\Http\Controllers\UsuarioController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Pagos\PagosController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Session;
use Auth;

class HomeController extends Controller{

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	*/

	/* Variable protegida de tipo UsersController */
	protected $usersController;

	/* Variable protegida de tipo MedicionController */
	protected $medicionController;

	/* variable de tipo PadecimientoController */
	protected $padecimientoController;

	/**
	 * Construltor del Controllador
	 *
	 * @return void
	 */
	public function __construct(UsersController $usersController, MedicionController $medicionController,PadecimientoController $padecimientoController)
	{
		$this->middleware('auth');
		
		/* Se carga la variable usersController con un objeto de tipo UsersController*/
		$this->usersController = $usersController;
		/* Se carga la variable medicionController con un objeto de tipo MedicionController*/
		$this->medicionController = $medicionController;
		/* Se carga la variable padecimientoController con un objeto de tipo PadecimientoController*/
		$this->padecimientoController = $padecimientoController;

	}

	/**
	 * Esta función valida el tipo de usuario que esta ingresando en la aplicación
	 *
	 * @return Response
	 */
	public function index()
	{
		/* Se optiene el id del usurio que ingreso en el sistema */
		$user_id = Auth::user()->id;
		
		/* Se busca el usuario y se determina que tipo de usuario es */
		$tipoUsuario = $this->tipo_usuario($user_id);

		/* Se crea una sesión del tipo de usuario que ingresó */
		Session::put('tipoUsuario', $tipoUsuario);
		
		/* Aqui se valida la ruta para un usuario admin y un usuario comun */				
		if ($tipoUsuario != 'admin') {
			
			/* Ruta del perfil del usuario */
			$user = $this->usersController->getUsuario(Auth::user()->id);

			/*Se traen todas las mediciones de un usuario */
			$mediciones = $this->medicionController->getMediciones(Auth::user()->id);
			$count = $mediciones->count();

			
			$padecimientosController = new PadecimientoController();

			//$padecimientos = $padecimientosController->getPadecimientoUusuariosUsuario(Auth::user()->id);


			$padecimientos = $padecimientosController->getPadecimientoUsuario(Auth::user()->id);


			return view('usuario.usuario',compact('user','mediciones','count','padecimientos'));
		}

		/* Se llama a la funcion getUsuarios del UsersController para traer a todos los usuarios*/
		$users = $this->usersController->getUsuarios();

		/* Ruta para el administrador delsistema */
		return view('admin.users.index')->with('users', $users);
	}

   /*
 	*----------------------------------------------------------------------------------------
	* Una vez que un usuario se encuentra logeado en la aplicacion se crea 
	* una session para saber si es un usuario admin o un usuario comun
	*---------------------------------------------------------------------------------------
	*/
	public function tipo_usuario($user_id)
	{
		$tipoUsuario = \DB::table('tipoUsuario')->where('id_usuario', $user_id)->first();
		
		return $tipoUsuario->tipo;	
	}

	/**
	 * Función para enviar un correo
	 *
	 * @return Response
	 */
	public function sendEmail(Request $request)
	{
			$mail = Mail::send('emails.contacto',$request->all(),function($message) use($request)
			{
				$message->to($request->email, $request->nombre);
				
				$message->from('gimnaciofitnesscenter@gmail.com');
				
				$message->subject($request->asunto);

			});
			dd($mail);
		$massage ="Se ha enviado correctamente el correo para ".$request->nombre;
		return view('correo.correo',compact('massage'));
	}

	/**
	 * Función para enviar un correo a todos los usuarios
	 *
	 * @return Response
	 */
	public function emailAllUsers(Request $request)
	{
		
		/*Preguntamos si la petición es Ajax*/
		if ($request->ajax()){
			
			/* Se llama a la funcion getUsuarios del UsersController para traer a todos los usuarios*/
			$users = $this->usersController->getUsuarioswithoutPaginate();
			/*
			foreach ($users as $key => $value) {
				
				$nombre= $value->nombre;
				Mail::send('emails.recordatorioPago',["msg" => $request->msg,"nombre"=>$nombre],function($message) use($value)
				{
					$message->to($value->email, $value->nombre);
					
					$message->from('gimnaciofitnesscenter@gmail.com');
					
					$message->subject("Recordatorio");
				});
			}
			*/

			$message = "Se han enviado correctamente los correos";
			return json_encode( $message );
		}
	}


	/**
	 * Función para ir a la vita de correos
	 *
	 * @return Response
	 */
	public function verCorreos()
	{
		$massage ="";
		return view('correo.correo',compact('massage'));
	}	


public function dameFecha($fecha,$dia)
{   
	list($day,$mon,$year) = explode('/',$fecha);
    return date('d/m/Y',mktime(0,0,0,$mon,$day+$dia,$year));           
}


public	function getUltimoDiaMes($elAnio,$elMes) {
  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
}

public function prueba4(){

//$fecha = date('Y-m-j');


//$fecha = date('Y-m-j H:m:s',strtotime("+15 minutes"));
/*
$nuevafecha = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = strtotime ( '+35 minute' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );
 */
//dd($fecha);









return $nuevafecha;

	 //Sumar 5 dias
	//dd("si");

	/*obtenemos la fecha de hoy*/
  	$fecha_de_hoy = $this->prueba4();
	
	/*obtenemos la fecha de pago*/
	$fecha_de_Pago = '2015-08-19 04:14:00';
	$date = (date($fecha_de_Pago));

	/*estoes si la persona quiere pagar por adelantdo */
	$pago_adelantado = false;

	/*es el dia de pago cuando le toca pagar al usuario*/
	$dia_de_pago = 31;
	
	/*Desfragmentamos la fecha de Pago*/
	list($anio_pago, $mes_pago, $diahora_pago) = explode("-",$date);
	list($dia_pago,$hora_pago) = explode(" ",$diahora_pago); 


	/*Desfragmentamos la fecha de hoy*/
	list($anio_hoy, $mes_hoy, $dia_hora_hoy) = explode("-",$fecha_de_hoy);
	list($dia_hoy,$hora_hoy) = explode(" ",$dia_hora_hoy); 

	$dia_hoy = (int)$dia_hoy;

	//dd("se esta revisndo que se entre en el segundo if...la idea es que en ese if crear siempre una fecha que comiensa con el primero de cada mes");

	if($dia_hoy < $dia_de_pago && !$pago_adelantado) {
		echo "primer if";
		$nueva_fecha_pago = $anio_pago.'-'.$mes_pago.'-'.$dia_de_pago.' '.$hora_pago;

		//dd("primer if :  ".$nueva_fecha_pago );
		/*Actualizar la fecha*/
		//echo("Fechas de pago anterior ".$fecha_de_Pago. "<br/><br/>");
		dd($nueva_fecha_pago);

	}else{


		$siguiente_mes = null;
		$mes = (int)$mes_pago;


		if($mes < 12){
			$siguiente_mes = $mes+1;
		}else{
			$siguiente_mes = 1;
		}

		
		$last_number_month = (int)$this->getUltimoDiaMes($anio_pago,$siguiente_mes); 
		
		//$nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
		if($dia_de_pago > $last_number_month) {
			//echo "segundo if";
			echo("Fechas de pago anterior ".$fecha_de_Pago. "<br/><br/>");
			$fecha = $date;
			$nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );
			dd($nuevafecha);
			list($anio_mes_siguiente, $mes_siguiente, $dia_Hora_mes_siguiente) = explode("-",$nuevafecha);
			list($dia_mes_siguiente, $hora_mes_siguiente) = explode(" ",$dia_Hora_mes_siguiente);

			//echo "anio_mes_siguiente : ".$anio_mes_siguiente."<br/><br/>";
			//echo "mes_siguiente : ".$mes_siguiente."<br/><br/>";
			//echo "anioHora_mes_siguiente : ".$dia_Hora_mes_siguiente."<br/><br/>";

			//dd($año);
			$z = $anio_mes_siguiente.'-'.$mes_siguiente.'-'.'1'.' '.$hora_mes_siguiente;
			//dd($z);
			
			///echo $fecha_de_Pago."<br/><br/>";
			
			//echo $nuevafecha;
		}else{
			echo "tercer if";
			//dd("tercer if :  ".$nueva_fecha_pago );
			$fecha = $date;
			$nuevafecha = strtotime ( '+1 month' , strtotime ( $fecha ) ) ;
			$nueva_fecha_pago = date ( 'Y-m-j H:m:s' , $nuevafecha );
			
			/*Actualizar la fecha*/
			//dd($nueva_fecha_pago);



		}

	}

}
public function prueba(){
  

	/*Esta es la fecha de hoy*/

	$fecha = date('Y-m-j H:m:s');
	$fecha_actual = strtotime ( '-6 hour' , strtotime ( $fecha ) ) ;
	$fecha_actual = date ( 'Y-m-j H:m:s' , $fecha_actual );

	echo $fecha_actual."<br/><br/>";

	/*fin de la fech de hoy */

	/*Esta es la fecha de pago*/
	$fecha_de_Pago = '2015-03-31 04:14:00';
	$fecha_de_Pago = (date($fecha_de_Pago));
	/*fin esta es la fecha de pago*/

	/*es el dia de pago cuando le toca pagar al usuario*/
	$dia_de_pago = 30;

	/*esta va hacer la nueva fecha de pago*/
	$siguiente_nueva_fecha_pago =null;

	/*Desfragmentamos la fecha de hoy*/
	list($anio_hoy, $mes_hoy, $dia_hora_hoy) = explode("-",$fecha_actual);
	list($dia_hoy,$hora_hoy) = explode(" ",$dia_hora_hoy);


	/*Desfragmentamos la fecha de Pago*/
	list($anio_pago, $mes_pago, $diahora_pago) = explode("-",$fecha_de_Pago);
	list($dia_pago,$hora_pago) = explode(" ",$diahora_pago); 

	/*para verificar cual esel mes siguiente*/
	if($mes_hoy < 12){
				
		$siguiente_mes = $mes_hoy +1;
		
		if($siguiente_mes < 10){

			$siguiente_mes = "0".$siguiente_mes;
		}
		
	}else{
		$siguiente_mes = 01;
	}

	/*preguntamos si es enero para saber que el siguiente mes es febrero*/
	/*esta logica es solo pr cuendo el mes actual es enero y el usuario tiene un dia de pago mayor al mes de febrero*/
	if($dia_de_pago > 28 && $mes_pago == 01 ){

		$last_number_month = (int)$this->getUltimoDiaMes($anio_hoy,$siguiente_mes); 
		
		$siguiente_nueva_fecha_pago = $anio_pago.'-'.$siguiente_mes.'-'.$last_number_month.' '.$hora_pago;

		dd("seee  ".$siguiente_nueva_fecha_pago);
	}else{
		

		
		$last_number_month = (int)$this->getUltimoDiaMes($anio_hoy,$siguiente_mes); 
		
		//dd($dia_de_pago."   ".$last_number_month);
		if($dia_de_pago <= $last_number_month ){
			
			if($siguiente_mes == 02){
				$nuevafecha = strtotime ( '+29 day' , strtotime ( $fecha_de_Pago ) ) ;
			}else{
				$nuevafecha = strtotime ( '+'.$last_number_month.' day' , strtotime ( $fecha_de_Pago ) ) ;
			}
			$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );
			//dd($nuevafecha);
			/*Desfragmentamos la nueva fecha*/
			list($nuevafecha_anio_pago, $nuevafecha_mes_pago, $nuevafecha_diahora_pago) = explode("-",$nuevafecha);
			list($nuevafecha_dia_pago,$nuevafecha_hora_pago) = explode(" ",$diahora_pago);

			$siguiente_nueva_fecha_pago = $nuevafecha_anio_pago.'-'.$nuevafecha_mes_pago.'-'.$dia_de_pago.' '.$nuevafecha_hora_pago;
			
			dd("seee  ".$siguiente_nueva_fecha_pago);
		}else{

			/*como el dia de pago es mayor al ultimo dia del mes siguiente se le esta un dia al */
			$nuevafecha = strtotime ( '-1 day' , strtotime ( $fecha_de_Pago ) ) ;
			$nuevafecha = date ( 'Y-m-j H:m:s' , $nuevafecha );

			$nuevafecha = strtotime ( '+1 month' , strtotime ( $nuevafecha )) ;
			$siguiente_nueva_fecha_pago = date ( 'Y-m-j H:m:s' , $nuevafecha );
			
			
			$siguiente_nueva_fecha_pago = $anio_pago.'-'.$siguiente_mes.'-'.$last_number_month.' '.$hora_pago;

			dd($siguiente_nueva_fecha_pago);
		}
	}
  }

  public function pruebas(){

  	//return view('prueba');
  	//dd(view('prueba'));
  	ob_start();
  	include '/opt/lampp/htdocs/all/newgimnasio/gimnasio/resources/views/prueba.blade.php';
  	$html = ob_get_clean();
  	$view =  \View::make('prueba')->render();

  	//die($view);
  $dumpdf = new \DOMPDF();
  $dumpdf->load_html($html);
  $dumpdf->render();
  //return $dumpdf->stream("ww");
  /*
  $pdf = \App::make('dompdf.wrapper');
  $pdf->loadHTML($html);
  return $pdf->stream();
  */
  /*	
  $dumpdf = new \DOMPDF();
  $dumpdf->load_html($html);
  $dumpdf->render();
  return $dumpdf->stream("ww");
  */

/*
c
  $dumpdf = new \DOMPDF();
  $dumpdf->load_html($view);
  $dumpdf->render();
  return $dumpdf->stream();
  */

//return view('prueba');
  //$view =  \View::make('prueba')->render();
  //$view =('<h1>Test2</h1>');
  //dd($view);

  //$dumpdf = new \DOMPDF();
  //$dumpdf->load_html($view);
  //$dumpdf->render();
  //return $dumpdf->stream();

  //$pdf = \App::make('dompdf.wrapper');
  //$pdf->loadHTML($view );
  //return $pdf->stream();
  	
  	//return view('prueba');

 	//$view =  \View::make('prueba')->render();

 	//dd($view);
  	//$pdf = \App::make('dompdf.wrapper');
	//$pdf->loadHTML('<h1>Test</h1>');
	//return $pdf->stream();
	//return $pdf->download('prueba');
  }

/*
    public function invoice() 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
 
    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }

*/

   
    
	public function consulta(PagosController $pagosController){
    	dd($pagosController->consulta());
	}
}
