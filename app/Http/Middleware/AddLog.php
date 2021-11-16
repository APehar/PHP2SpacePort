<?php

namespace App\Http\Middleware;
use App\Models\Log;
use Closure;

class AddLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $action = null)
    {
        $user = session('user')->id_user;
        $time = time();
        $model = new Log();
        $model->addLog($user, $time, $action);
        return $next($request);
    }
}

