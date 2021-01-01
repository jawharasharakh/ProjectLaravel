<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontSiteController extends Controller
{
    public function ShowHome()
    {
        return view('frontside.home');
    }

    public function ShowAboutus()
    {
        return view('frontside.aboutus');
    }

    public function ShowWhatwedo()
    {
        return view('frontside.whatwedo');
    }

    public function ShowContact()
    {
        return view('frontside.contact');
    }

    public function ShowMeet()
    {
        return view('frontside.meet');
    }
}
