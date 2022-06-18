<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_as == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Akses Ditolak! karena kamu bukan seorang Admin');
            }
        }
        else
        {
            return redirect('/home')->with('status','Tolong Login terlebih dahulu');
        }
    }
}
