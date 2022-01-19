<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/restaurant/dashboard';

    public function __construct()
    {
      $this->middleware('guest')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('restaurant');
    }
    
    public function showRegisterForm()
    {
        return view('auth.restaurant_register');
    }


}
