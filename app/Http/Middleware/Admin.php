<?php

namespace App\Http\Middleware;

use Closure;
use Auth, URL;

class Admin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$previousUrl = URL::previous();

		/* 判断当前用户是否登录或缓存是否过期 */
		$user = Auth::user();
		if ( !$user ) {
			return redirect()->to('/logout');
		}
// dump(Auth::user()->hasRole('super-admin'));
// exit;
		if ( !Auth::user()->hasRole('super-admin') ) {
			return view('layouts.403', compact('previousUrl'));
		}

		return $next($request);
	}
}
