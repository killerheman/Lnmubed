<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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
}
