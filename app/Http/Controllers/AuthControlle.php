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
 		$validator = Validator::make($request->all(), [
 'name' => 'required|string|max:255',
 'email' => 'required|string|email|max:255|unique:users',
 'password' => 'required|string|min:6',
]);
$status = "error";
$message = "";
$data = null;
$code = 400;
if ($validator->fails()) {
 $errors = $validator->errors();
 $message = $errors;
}
else{
 $user = \App\User::create([
 'name' => $request->name,
 'email' => $request->email,
 'password' => Hash::make($request->password),
 'roles' => json_encode(['CUSTOMER']),
 ]);
 if($user){
 // Auth::login($user);
 $user->generateToken();
 $status = "success";
 $message = "register successfully";
 $data = $user->toArray();
 $code = 200;
 }
 else{
 $message = 'register failed';
 }
}
return response()->json([
 'status' => $status,
 'message' => $message,
 'data' => $data
], $code);
}


 	public function logout(Request $request)
 	{
 		$user = Auth::user();
 if ($user) {
 $user->api_token = null;
 $user->save();
 }
 return response()->json([
 'status' => 'success',
 'message' => 'logout berhasil',
 'data' => null
 ], 200); 
}
