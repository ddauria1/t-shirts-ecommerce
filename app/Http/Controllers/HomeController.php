<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function GetHomeView()
    {
        return view('homePage');
    }
}
