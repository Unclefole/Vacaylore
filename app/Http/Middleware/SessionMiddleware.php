<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionMiddleware
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
        if (auth()->check())
        {
            if(auth()->user()->user_role == 2)
            {

            }
            else
            {
                return redirect()->route('UI_index')->with('error','Access Denied');
            }
        }
        else
        {
            return redirect()->route('admin_login');
        }
        return $next($request);
    }
}
