<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
use Illuminate\Contracts\Auth\Guard;
class IsAdmin {

	public function __construct(Guard $auth){

		$this->auth = $auth;
	}
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$userType = Session::get('tipoUsuario');

		if($userType != 'admin'){
			
			if($request->ajax())
			{

				return response('Unauthorized.', 401);

			}else
			{
			
				return redirect()->back();
			
			}
		}

		return $next($request);
	}

}
