<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function driver_signup(Request $request)
    {
        $v = Validator::make($request->all(),[
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:drivers',
			'zip_code' => 'required',
			'phone' => 'required|unique:drivers',
			'licence_number' => 'required|unique:drivers',
			'driving_licence_expiration' => 'required',
			'vehicle_name' => 'required',
			'year' => 'required',
			'image' => 'required|image',
			'address' => 'required',
			'longitude' => 'required',
			'latitude' => 'required',
			'registration_number' => 'required|unique:drivers',
		]);
		if($v->fails())
		{
			return response()->json(['status' => false , 'message' => $v->errors()->first()]);
		}
		$img = $request->image;
		$name = time().'-'.$img->getClientOriginalName();
		$img->move(public_path('images'),$name);
		$input = $request->all();
		$input['image'] = 'http://clickeat.com.au/public/images/'.$name;
		$d = Driver::create($input);
		return response()->json(['status' => true , 'message' => 'Driver Registered Successfully!', 'driver' => $d]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function checkPhone(Request $request)
    {
        $u = Driver::where('phone',$request->phone)->first();
        if($u)
        {
            return response()->json(['status' => true,'message' => ['account' => 1],'driver' => $u]);
        }
        return response()->json(['status' => true, 'message' => ['account' => 0]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
