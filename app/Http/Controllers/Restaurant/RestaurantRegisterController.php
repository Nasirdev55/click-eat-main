<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RestaurantRegisterController extends Controller
{
    use RegistersUsers;

    public function showRegistrationForm()
    {
        return view('auth.restaurant_register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:restaurants', 'unique:admins'],
            'phone' => ['required', 'string', 'max:255', 'unique:users', 'unique:restaurants', 'unique:admins'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Restaurant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'theme' => 1,
            'domain_url' => 'http://localhost:9000/',
            'password' => Hash::make($data['password']),
        ]);
    }

    
    public function guard()
    {
        return Auth::guard('restaurant');
    }

}
