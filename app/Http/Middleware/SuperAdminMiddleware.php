<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->level == 'superadmin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Access Denied! as you are not as super admin');
            }
        }
        else
        {
            return redirect('/home')->with('status','Please Login First');
        }
    }
}
