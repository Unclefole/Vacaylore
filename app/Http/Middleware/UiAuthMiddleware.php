<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UiAuthMiddleware
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
            if (auth()->user()->deleted_at !== null || auth()->user()->is_deleted_account === 1){
                Auth::logout();
                return redirect()->route('UI_index');
            }
            if (auth()->user()->is_deleted_account === 2){
                return redirect()->route('UI_index')->with('error','Your account is in deleting process, please verify your email to delete your ivacay account');
            }
        }
        else
        {
            return redirect()->route('UI_login')->with('error','Login please');
        }
        return $next($request);
    }
}
