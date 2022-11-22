<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Home page
    public function home(){
        return view('frontend.home');
    }
}
