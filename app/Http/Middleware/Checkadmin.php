<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;



class Checkadmin
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
    if(Auth::user()){
        if (Auth::user()->status == 'admin') {
            return $next($request);
        }else{
            return view('home');
        }
    }else{
        abort(403, 'Unauthorized action.');
    }
}

}


