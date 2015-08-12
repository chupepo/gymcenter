<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Ruta para cerrar session
|--------------------------------------------------------------------------
|
*/
Route::get('logout', ['middleware' => 'auth', function()
{	
	Session::flush();
	clearstatcache();	
    Auth::logout();
	return Redirect::to('/')->with('flash_info', 'Se ha cerrado la sesión del usuario');
}]);

Route::get('/password/email', ['', function()
{	

	return view('auth.password');
}]);






Route::get('/helEmail', ['', function()
{	

	$data =[
		"title"=>"something",
		"content" =>  "somthing too",

	];


			Mail::send('emails.welcome',$data,function($message)
			{
				$message->to('stevengs_alfaro@hotmail.com', "Andrey");
				
				$message->from('gimnaciofitnesscenter@gmail.com');
				
				$message->subject("somthing");

			});

}]);








/*
|--------------------------------------------------------------------------
| Rutas para el controlador auth
|--------------------------------------------------------------------------
|
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/*
|--------------------------------------------------------------------------
| Rutas para el controlador home
|--------------------------------------------------------------------------
|
*/
Route::get('home', ['middleware' => ['auth'], 'uses' => 'HomeController@index']);
//Route::get('home','HomeController@index');

//Route::get('prueba', ['middleware' => 'auth', 'uses' => 'HomeController@pruebas']);
Route::get('prueba', ['middleware' => 'auth', 'uses' => 'HomeController@consulta']);
//Route::get('prueba', ['uses' => 'HomeController@prueba']);
//Route::get('/prueba','HomeController@prueba');
//Route::get('/prueba10','HomeController@prueba10');

Route::get('/entre', ['middleware' => 'auth', function()
{	
	echo "si";
}]);

Route::get('/ok', ['middleware' => 'auth', function()
{	
	echo "si";
}]);


Route::get('/correos', ['middleware' => ['auth','is_admin'], 'uses' => 'HomeController@verCorreos']);
Route::post('/sendEmail', ['middleware' => ['auth','is_admin'], 'uses' => 'HomeController@sendEmail']);

Route::post('emailAllUsers', ['middleware' => ['auth','is_admin'],  'uses' => 'HomeController@emailAllUsers']);


/*
|--------------------------------------------------------------------------
| Rutas para el controlador Welcome
|--------------------------------------------------------------------------
|
*/
Route::get('/', ['middleware' => 'guest', 'uses' => 'WelcomeController@index']);


/*
|--------------------------------------------------------------------------
| Rutas del usuarios administrador
|--------------------------------------------------------------------------
|
| Aqui se encuentras las rutas que el administrdor va a usar en el sistema
|
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth','is_admin'], 'namespace' => 'Admin'],function(){

	Route::resource('users','UsersController');

});
Route::get('perfil/{id}', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@routePerfil']);

Route::post('editarImagen', ['middleware' => ['auth'],  'uses' => 'Admin\UsersController@editarImagen']);

Route::post('crearCita', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@getAjaxUsuario']);

Route::post('getAjaxUser', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@getAjaxUsuarioById']);

Route::post('saveDatosPago', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@ajaxSaveDatosPago']);

Route::post('getAjaxUsersByPayDay', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@getAjaxUsersByPayDay']);

Route::post('getUsersByName', ['middleware' => ['auth','is_admin'],  'uses' => 'Admin\UsersController@buscarUsarioPorNombre']);




/*
|--------------------------------------------------------------------------
| Rutas del usuarios medicion
|--------------------------------------------------------------------------
|
| Aqui se encuentras las rutasal controlador MedicionController que el administrdor va a usar en el sistema
|
*/

Route::group(['prefix' => 'medicion', 'middleware' => ['auth','is_admin'], 'namespace' => 'Medicion'],function(){

	Route::resource('medicion','MedicionController');

});

Route::get('medicion/{id}', ['middleware' => ['auth','is_admin'],  'uses' => 'Medicion\MedicionController@index']);
Route::post('saveIndice', ['middleware' => ['auth','is_admin'],  'uses' => 'Medicion\MedicionController@storeIndiceMasaCorporal']);
Route::post('saveFrecuencia', ['middleware' => ['auth','is_admin'],  'uses' => 'Medicion\MedicionController@storeFrecuenciaCardiaca']);




/*
|--------------------------------------------------------------------------
| Rutas del usuarios padecimientos
|--------------------------------------------------------------------------
|
| Aqui se encuentras las rutasal controlador PadecimientosController que el administrdor va a usar en el sistema
|
*/
Route::post('padecimiento', ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@store']);
Route::post('editarpadecimiento', ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@edit']);
Route::get('editarpadecimiento', ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@edit']);
//Route::post('/updatePadeciento', ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@update2']);
Route::post('/updatePadeciento', ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@update']);
//Route::get('editar' ['middleware' => ['auth','is_admin'],  'uses' => 'Padecimientos\PadecimientoController@store']);



/*
|--------------------------------------------------------------------------
| Rutas de CitaController
|--------------------------------------------------------------------------
|
| Aqui se encuentras las rutas al controlador CitaController que el administrdor va a usar en el sistema
|
*/
Route::group(['prefix' => 'cita', 'middleware' => ['auth','is_admin'], 'namespace' => 'Cita'],function(){

	Route::resource('cita','CitaController');

});
Route::get('getCitas', ['middleware' => ['auth','is_admin'],  'uses' => 'Cita\CitaController@verCitas']);
Route::post('updateEstado', ['middleware' => ['auth','is_admin'],  'uses' => 'Cita\CitaController@editatEstado']);

/*
|--------------------------------------------------------------------------
| Rutas del Pagos
|--------------------------------------------------------------------------
|
| Aqui se encuentras las rutasal controlador PagosController que el administrdor va a usar en el sistema
|
*/

Route::group(['prefix' => 'pagos', 'middleware' => ['auth','is_admin'], 'namespace' => 'Pagos'],function(){

	Route::resource('pagos','PagosController');

});
Route::get('/reportes', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@index']);
Route::get('/pagos/{id}', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@create']);
Route::get('/realizarPago', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@realizarPago']);
Route::get('/morosos', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@getMorosos']);
Route::get('/aldia', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@getAlDia']);
Route::get('/ingresos', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@showIngresos']);

Route::get('/ingresoHoy', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@getAjaxTodayIngresos']);
Route::post('/ingresoHoy', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@getAjaxTodayIngresos']);



Route::post('/getAjaxIngresos', ['middleware' => ['auth','is_admin'],  'uses' => 'Pagos\PagosController@getAjaxRangoIngresos']);



Route::get('/nada', function()
{	

	$queue = Queue::push(new \SendEmail($message));
	return	$queue;
});


class LogMessage
{
	public function fire(){
		return "hola";
	}
}