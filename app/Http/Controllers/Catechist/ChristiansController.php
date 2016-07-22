<?php

namespace QOA\Http\Controllers\Catechist;

use QOA\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QOA\Http\Requests;
use DB;

class ChristiansController extends Controller
{
    public function getChristians(){
    	
    	$christians = DB::table('christians')->get();

        return view('templates.catechist.christians', compact('christians'));
    }

    public function searchChristians(){

    }

    public function addChristian(){

    }
}
