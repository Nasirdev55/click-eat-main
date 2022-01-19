<?php


namespace App\Http\Middleware;
use Closure;


class RedirectIfNotRestaurant
{
    public function handle($request, Closure $next, $guard="restaurant")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('login'));
        }
        return $next($request);
    }
}