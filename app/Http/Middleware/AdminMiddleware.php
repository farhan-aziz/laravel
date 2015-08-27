<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{   if(!Auth::check())
        {
            return redirect('/');
        }
        elseif(Auth::user()->is_admin != 1)
        {
            return redirect('user/profile/');
        }

		return $next($request);
	}

}
