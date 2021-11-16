<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
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
        if(session()->has('user')){
            $role = session('user')->role_id;
            if($role == 1)
                return $next($request);
            else
                return redirect('/login')->with('message', 'You do not have admin rights.');
        }
        else
            return redirect('/login')->with('message', 'You are not logged in.');

    }
}
