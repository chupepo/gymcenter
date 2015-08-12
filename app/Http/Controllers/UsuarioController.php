<?php namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;

class UsuarioController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('home');
		return view('prueba');
	}

	/**
	 * Devuelve a todos los usuarios de la base de datos
	 *
	 * @return Response
	 */
	public function getUsuarios()
	{
		//$users = User::al
		
		//if (\Request::ajax()) {
			$users = \DB::table('users')
				->where('id','<>', Auth::user()->id)
				->orderBy('nombre','ASC')
				->get();

			return $users;


		//}else{
		//	echo "no";
		//}
		/*

		*/
	}

		
}