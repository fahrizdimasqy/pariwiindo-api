<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
    	$user = \App\User::all();
    	return $user;
    }
    public function view($id)
    {
    	$user = \App\User::find($id);
    	return $user;
    }
}
