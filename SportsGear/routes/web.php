<?php

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

Route::get('/', 'GuestController@home');

Route::get('/products', 'GuestController@products');

Route::get('/categories','GuestController@categories');



Route::get('/cart', 'CartController@cart');

Route::get('/wishlist', 'WishlistController@wishlist');

Route::get('/confirmation', 'UserController@confirmation');

Auth::routes();

Route::get('/home', 'UserController@index');

Route::prefix('/staff')->group(function(){

	Route::get('/', 'StaffController@index')->name('staff.dashboard');

	Route::get('/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
	
	Route::post('/login', 'Auth\StaffLoginController@Login')->name('staff.login.submit');
});


Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');


