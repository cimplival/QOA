<?php

namespace QOA\Http\Controllers\Home;
use QOA\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

use QOA\Http\Requests;

class HomeController extends Controller
{   
    //GET HOME PAGE
    public function getHome()
    {
        if(!Auth::check()){
            return view('templates.home.home');
        }
    }
}
