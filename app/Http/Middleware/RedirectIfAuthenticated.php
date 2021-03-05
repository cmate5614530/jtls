<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect('/admin_dashboard');
                    break;
                case 'user':
                    return redirect('/user_home');
                    break;

//                default:
//                    return redirect('/home');
//                    break;
            }
        }
        return $next($request);
    }
}
