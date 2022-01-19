<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adminabout;
use App\Models\Admincontact;
use App\Models\Adminservice;
use App\Models\Adminslider;
use App\Models\Adminteam;

class WebPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adata = array();
        $adata['sliders'] = Adminslider::all();
        $adata['team'] = Adminteam::all();
        return view('main.home',['data' => $adata]);
    }

    public function packages(Request $request)
    {
        return view('main.packages');
    }
    public function services(Request $request)
    {
        return view('main.services',['services' => Adminservice::all()]);
    }
    public function contact(Request $request)
    {
        return view('main.contact-us');
    }

    public function about(Request $request)
    {
        return view('main.about-us',['data1' => Adminabout::find(1),'data2' => Adminabout::find(2)]);
    }

    public function contactform(Request $request)
    {
            $request->validate([
                'business_name' => 'required',
                'full_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]);
            Admincontact::create([
                'bname' => $request->business_name,
                'fullname' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->message,
            ]);
            return back()->with('msg','Your message sent successfully!');
    }
}
