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

Route::post('/', 'CartController@purchaseItems');


Route::prefix('/shop')->group(function(){

	Route::get('/categories','GuestController@categories');

	Route::get('categories/{category}', 'ProductController@category');

});



Route::get('/cart', 'CartController@cart');

Route::get('/wishlist', 'WishlistController@wishlist');

Route::get('/confirmation', 'UserController@confirmation');

Route::get('/accountdetails','UserController@accountdetails')->name('accountdetails');

Route::post('/update', 'UserController@update');


Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Route::post('/submit', 'UserController@submitQuery');

Route::prefix('/staff')->group(function(){

	Route::get('/', 'StaffController@index')->name('staff.dashboard');

	Route::get('/accountDetails', 'StaffController@accountDetails')->name('staff.accountDetails');

	Route::get('/viewOrders', 'StaffController@viewOrders')->name('staff.viewOrders');

	Route::get('/addProducts','StaffController@addProducts')->name('staff.addProducts'); //add products route

	Route::get('/addStaff', 'StaffController@addStaff')->name('staff.addStaff');

	Route::get('/updateProducts', 'StaffController@updateProducts')->name('staff.updateProducts');

	Route::get('/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
	
	Route::post('/add','StaffController@addProducts'); //add method
	
	Route::post('/login', 'Auth\StaffLoginController@Login')->name('staff.login.submit');

	ROute::post('/update', 'StaffController@update');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

//

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');