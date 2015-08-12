<?php namespace App\Http\Controllers\Cita;

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CrearCitaRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Cita;
class CitaController extends Controller {

	

	/* variable de tipo UsersController */
	protected $usersController;

	/*
	|--------------------------------------------------------------------------------
	|  Constructor del UsersController
	|--------------------------------------------------------------------------------
	*/
	public function __construct(UsersController $usersController){
		$this->middleware('auth');

		$this->usersController = $usersController;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		//dd("si");
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
	public function store(Request $request,CrearCitaRequest $requestCita)
	{
		/*Se crea una cita nueva*/
		$cita = new Cita($request->all());
		$cita->estado = true;
		$cita->save();

		return \Redirect::to('getCitas');
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
		$cita = Cita::findOrFail($id);

		/*Se traer el usuario de la cita */
		$user = $this->usersController->getUsuario($cita->id_usuario);

		return view('cita.updateCita',compact('cita','user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{

		/*Encontramos el usuario que queremos actualizar*/
		$cita = Cita::findOrFail($id);
				
		/*metodo de larevel para actualizar*/
		$cita->fill($request->all());

		/* Se actualiza la cita del usuario */
		$cita->save();
		//dd($cita);
		return \Redirect::to('/getCitas');
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
	|  Función para mostrar todas las citas
	|--------------------------------------------------------------------------------
	*/
	public function verCitas()
	{
		$citas = $this->getCitas();
		return view('cita.verCitas',compact('citas'));
	}
	/*
	|--------------------------------------------------------------------------------
	|  Función que retorna a todos las citas pendientes
	|--------------------------------------------------------------------------------
	*/
	public function getCitas()
	{
		$citas = \DB::table('cita')
            ->join('users',  'users.id', '=','cita.id_usuario' )
            ->select('cita.estado', 'cita.fecha_inicio','cita.termina', 'cita.entrenador', 'users.nombre', 'users.apellido1','cita.id' )
            ->where('cita.estado', 1)
            ->orderBy('cita.id','desc')
            ->get();

		/*Se valida si existe una cita de un usuario*/	
		if(!empty($citas)){

			foreach ($citas as $key => $value) {
				$value->fecha = $this->convertDate($value->fecha_inicio);
			}
		}
		return $citas;
	}

	public function convertDate($date){
		
		
		$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sábado","Domingo");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		 
		$date = (date($date));

		$diaSemana = date("N", strtotime($date))-1; 
		
		
		list($anio, $mes, $diahora) = explode("-",$date); 

		list($dia,$hora) = explode(" ",$diahora); 

		//var_dump($diaSemana);
		$fecha = $dias[$diaSemana]." ".$dia." de ".$meses[$mes-1]." del ".$anio." a las ". $hora;
		//var_dump($fecha);
		return $fecha;	
	}

	/**
	 * Editar estado.
	 */
	public function editatEstado(Request $request)
	{
		$cita = Cita::findOrFail($request->id);

		$cita->estado = false;

		$cita->save();

		return redirect()->back();
		
	}
}
