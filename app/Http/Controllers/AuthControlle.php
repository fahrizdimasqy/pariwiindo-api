<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class AuthControlle extends Controller
{
    //
    public function login(Request $request)
 	{
 		$user = User::where('email', '=', $request->email)->firstOrFail();
		 $status = "error";
		 $message = "";
		 $data = null;
		 $code = 401;
		 if($user){
		 // jika hasil hash dari password yang diinput user sama dengan password di database user maka
		 if (Hash::check($request->password, $user->password)) {
		 // generate token
			 $user->generateToken();
			 $status = 'success';
			 $message = 'Login sukses';
			 // tampilkan data user menggunakan method toArray
			 $data = $user->toArray();
			 $code = 200;
		 }
		 else{
		 	$message = "Login gagal, password salah";
		}
		}
		 else{
		 $message = "Login gagal, username salah";
		 }
		 return response()->json([
		 'status' => $status,
		 'message' => $message,
		 'data' => $data
		 ], $code);
 	}
 	public function register(Request $request)
 	{

	 }
 	public function logout(Request $request)
 	{

 	}
}