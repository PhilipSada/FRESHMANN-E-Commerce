<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getStoreProducts', 'Api\ProductController@all');
Route::get('category', 'Api\ProductController@category');
Route::post('register', 'Api\UserController@register');
Route::post('login', 'Api\UserController@login');
Route::get('profile', 'Api\UserController@getAuthenticatedUser');
Route::post('payment', 'Api\CheckoutController@getToken');