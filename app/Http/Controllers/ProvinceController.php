<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //
    public function index()
    {
    	$province = \App\Province::all();
    	return $province;
    }
    public function view($id)
    {
    	$province = \App\Province::find($id);
    	return $province;
    }
}
