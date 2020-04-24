<?php

use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/email','MailConfirmationController@sendMail');
Route::get('/test-email','MailConfirmationController@testMail');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes
Route::get('/admin', 'Admin\AdminController@show');
Route::get('/admin/categories', 'Admin\CategoryController@index')->middleware('role:Admin');
Route::get('/admin/category/create', 'Admin\CategoryController@create')->middleware('role:Admin');
Route::post('/admin/category/store', 'Admin\CategoryController@store')->middleware('role:Admin');
Route::get('/admin/categories/{id}/edit', 'Admin\CategoryController@edit')->middleware('role:Admin');
Route::put('/admin/categories/{id}', 'Admin\CategoryController@update')->middleware('role:Admin');
Route::get('/admin/categories/{id}/delete','admin\CategoryController@delete')->middleware('role:Admin');
Route::get('/admin/inventory-items', 'Admin\ProductController@index')->middleware('role:Admin');
Route::get('/admin/inventory/create', 'Admin\ProductController@create')->middleware('role:Admin');
Route::post('/admin/inventory/store', 'Admin\ProductController@store')->middleware('role:Admin');
Route::get('/admin/inventory/{id}/edit', 'Admin\ProductController@edit')->middleware('role:Admin');
Route::put('/admin/inventory/{id}', 'Admin\ProductController@update')->middleware('role:Admin');
Route::get('/admin/inventory/{id}/delete', 'Admin\ProductController@delete')->middleware('role:Admin');

//frontend routes
//homepage
Route::get('/', 'HomeController@home');
//singleproductpage
Route::get('/product/{id}', 'ProductController@show');
//productspage
Route::get('/products/{id}', 'ProductController@showAll');

//cart-page
Route::get('/cart', 'CartController@show');

//registration and login with JWT for the react frontend
Route::get('/register', 'ReactAuthController@register');
Route::get('/login', 'ReactAuthController@login');

//checkout page
Route::get('/checkout', 'CheckoutController@show');

//thank you for orders
Route::get('/order-confirmation', 'CheckoutController@thanks');