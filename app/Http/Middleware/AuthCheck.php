<?php


namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;


class AuthCheck
{
    public function handle($request, Closure $next)
    {

        if($request->path() == 'login' || $request->path() == 'register' || $request->path() == 'restaurant/login' ) {
            if(auth()->guard('admin')->check()) {
                return redirect('/admin/dashboard');
            }
            if(auth()->guard('restaurant')->check()) {
                return redirect('/restaurant/dashboard');
            }
            if(auth()->check()) {
                return redirect('/home');
            }
        }
        return $next($request);
    }
}
