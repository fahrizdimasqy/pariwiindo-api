<?php

use Illuminate\Http\Request;
// use App\Http\Resources\Book as BookResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::prefix('v1')->group(function () {
// 	Route::post('login', 'AuthController@login');
// 	// tambahkan sekalian untuk register dan logout :
// 	Route::post('register', 'AuthController@register');
// 	Route::post('logout', 'AuthController@logout');
// 	Route::get('tickets', 'TicketController@index');
// 	Route::get('ticket/{id}', 'TicketController@view')->where('id', '[0-9]+');
// 	Route::get('provinces', 'ProvinceController@index');
// 	Route::get('province/{id}', 'ProvinceController@view')->where('id', '[0-9]+');
// 	Route::get('users', 'UserController@index');
// 	Route::get('user/{id}', 'UserController@view')->where('id', '[0-9]+');
// 	Route::get('tickets/top/{count}', 'TicketController@top');

// 	Route::middleware(['auth:api'])->group(function () {
// 		Route::post('logout', 'AuthController@logout');
		// Route::post('shipping', 'ShopController@shipping');
		// Route::post('services', 'ShopController@services');
		// Route::post('payment', 'ShopController@payment');
		// Route::get('my-order', 'ShopController@myOrder');
		//...
// 	});
// });
// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });

// Route::get('/ticket', function () {
//  return new TicketResource(Book::find(1));
// });
// Route::get('profile', function () {
 // Hanya untuk user yang sudah login
// })->middleware('auth:api');
Route::prefix('v1')->group(function () {
 Route::get('tickets', 'TicketController@index');
 Route::get('ticket/{id}', 'TicketController@view')->where('id', '[0-9]+');
 Route::post('login', 'AuthController@login');
 Route::post('register', 'AuthController@register');
 Route::get('categories/random/{count}', 'CategoryController@random');
 Route::get('tickets/top/{count}', 'TicketController@top'); // <= ini ya

 Route::post('logout', 'AuthController@logout');

});
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:api')->group(function () {
 Route::post('logout', 'AuthController@logout');
 //...
 }); 