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

Route::get('/', 'PagesController@home');

Route::get('/register', 'PagesController@register');

Route::get('/login', 'PagesController@login');

Route::get('/products', 'PagesController@products');



/**
* Needed?
*/
Route::get('/product', 'PagesController@product');

Route::get('/cart', 'PagesController@cart');

Route::get('/confirmation', 'PagesController@confirmation');
Auth::routes();

Route::get('/home','HomeController@index');