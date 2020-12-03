<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        //returns the landing page for app
        return view('landing-page.index');
    }
    public function edit(){
        return view('landing-page.edit');
    }
}
