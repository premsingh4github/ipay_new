<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware  {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	public function handle($request, Closure $next)
	{
		//return $next($request);
		//return Redirect::guest('login');
		if(!$this->auth->check()){
				return redirect()->guest('auth/login');
			}
		else {
			return $next($request);
		}
	}

}
