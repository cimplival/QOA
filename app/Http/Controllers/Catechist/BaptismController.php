<?php

namespace QOA\Http\Controllers\Catechist;

use QOA\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QOA\Http\Requests;
use DB;

class BaptismController extends Controller
{
    //GET BAPTISM PAGE
    public function getBaptism()
    {
        $baptisms = DB::table('baptisms')->get();
        return view('templates.catechist.baptism', compact('baptisms'));
    }

    public function deleteBaptism($id)
    {

    }
}
