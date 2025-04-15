<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Route;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Route::is('admin.*')) {
                    Auth::shouldUse('admin');
                    return redirect(RouteServiceProvider::ADMIN_HOME());
                } elseif (Route::is('user.*')) {
                    Auth::shouldUse('user');
                    return redirect(RouteServiceProvider::USER_HOME());
                }
            }
        }

        return $next($request);
    }
}
