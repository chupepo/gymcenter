<?php namespace App\Http\Controllers;

use Session;
use Auth;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	|Este controlador le da la bienvenida al usuario que entra en la aplicación
	|
	*/

	/**
	 * Constructor del WelcomeControlador 
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->getPrueba();
		$this->middleware('guest');
	}

	/**
	 * En el index se le da la bienvenida al usuario
	 *
	 * @return View
	 */
	public function index()
	{
		if(!Auth::user()){
			return view('welcome');
		}
	}

	/* Funcion para hacer pruebas del sistema*/
	public function getPrueba(){
		return view('prueba');
	}

}
