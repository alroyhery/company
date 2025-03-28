<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about-us.index');
    }

    public function service()
    {
        return view('service.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
