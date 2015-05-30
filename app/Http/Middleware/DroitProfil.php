<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class DroitProfil {

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct()
	{
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
		switch (Auth::user()->id_type) {
			case '1':
				return new RedirectResponse(url('/home'))
				break;
			
			default:
				# code...
				break;
		}

		if (Auth::user()->email)
		{
			return new RedirectResponse(url('/home'));
		}

		return $next($request);
	}

}