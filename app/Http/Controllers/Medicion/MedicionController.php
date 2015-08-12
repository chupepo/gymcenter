<?php namespace App\Http\Controllers\Medicion;

//use App\Http\Requests;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddMedicionRequest;
use Illuminate\Http\Request;

use App\Medicion;
use App\User;
class MedicionController extends Controller {


	protected $request;

	/*
	|--------------------------------------------------------------------------------
	|  Constructor del MedicionController
	|--------------------------------------------------------------------------------
	*/
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/*
	|--------------------------------------------------------------------------------------
	|  Función que va a la vista agregar de medición y pasa el id del usuario por parmetro
	|--------------------------------------------------------------------------------------
	*/
	public function index($id)
	{	
		return view('medicion.medicion.agregar',compact('id'));
	}

	/*
	|--------------------------------------------------------------------------------------
	|  Función para guardar la medición de un cliente
	|--------------------------------------------------------------------------------------
	*/
	public function store(Request $request)
	{
		/*Se traer todas las mediciones*/
		$getmedicion= Medicion::all();

		/*Se crea una medición nueva*/
		$medicion = new Medicion($request->all());

		/*se convierte en int el id del usuario*/
		$medicion->id_usuario = $request->id_usuario;

		/*Preguntamos si existe una medición*/
		if(empty($getmedicion->last())){
			
			$medicion->id = 1;
		}else{
			$medicion->id = ($getmedicion->last()->id + 1);
		}
		$medicion->save();

		return \Redirect::to("perfil/$medicion->id_usuario");
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
		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/*
	|--------------------------------------------------------------------------------------
	|  Function que guarda el indicede masa corporal
	|--------------------------------------------------------------------------------------
	*/
	public function storeIndiceMasaCorporal(Request $request){

		$medicion = $this->getMedicion($request->id_usuario);
		$medicion->indice_masa_corporal = $request->resultado;
		$medicion->save();

		return redirect()->back();
	}
	
	/*
	|--------------------------------------------------------------------------------------
	|  Function que calcula la frecuencia cardiaca
	|--------------------------------------------------------------------------------------
	*/
	public function storeFrecuenciaCardiaca(Request $request){

		$medicion = $this->getMedicion($request->id_usuario);
		$medicion->frecuencias_cardiaca = $request->resultado;
		$medicion->save();

		return redirect()->back();
	}

	/*
	|--------------------------------------------------------------------------------------
	|  Function que retorna la ultima medicion de un usuario
	|--------------------------------------------------------------------------------------
	*/
	public function getMedicion($id){

		$medicion  = Medicion::where('id_usuario', $id)->get();
		$medicion = $medicion->last();

		return $medicion;
	}
	/*
	|--------------------------------------------------------------------------------------
	|  Function que retorna todas la mediciones de un usuario
	|--------------------------------------------------------------------------------------
	*/
	public function getMediciones($id){

		$mediciones  = Medicion::where('id_usuario', $id)
		->orderBy('medicion.created_at', 'desc')
		->get();
		return $mediciones;
	}
}
