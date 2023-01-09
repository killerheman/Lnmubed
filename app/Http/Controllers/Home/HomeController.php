<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function organogram()
    {
        return view('home.organogram');
    }

    public function about()
    {
        return view('home.about');
    }

    public function visionMission()
    {
        return view('home.vision_mission');
    }

    public function viceChancellor()
    {
        return view('home.vice_chancellor');
    }

    public function proViceChancellor()
    {
        return view('home.pro_vice_chancellor');
    }

    public function registrar()
    {
        return view('home.registrar');
    }

    public function director()
    {
        return view('home.director');
    }

    public function head()
    {
        return view('home.head');
    }


    public function contact()
    {
        return view('home.contact');
    }

    public function contactStore(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
            'mobile'=>'required'
        ]);

        $contact=ContactUs::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'mobile'=>$request->mobile,
        ]);

        return redirect()->back()->with('success','Contact Sent Successfully');
    }

    public function programmes()
    {
        return view('home.programme');
    }

    public function faculty()
    {
        return view('home.faculty');
    }
}
