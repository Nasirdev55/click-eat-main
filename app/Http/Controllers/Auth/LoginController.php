<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','authcheck'])->except('logout');
    }
    protected function attemptLogin(Request $request)
    {
        $admin = Auth::guard('admin')->attempt(
            $this->credentials($request), $request->filled('remember')
        );
        $res = Auth::guard('restaurant')->attempt(
            $this->credentials($request), $request->filled('remember')
        );
        $user = Auth::guard('admin')->attempt(
            $this->credentials($request), $request->filled('remember')
        );
        if($admin)
        {
            $this->redirectTo = '/admin/dashboard';
            return $admin;
        }
        if($res)
        {
            $this->redirectTo = '/restaurant/dashboard';
            return $res;
        }
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
}
