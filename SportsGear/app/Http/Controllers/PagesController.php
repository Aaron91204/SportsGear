<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Product;
use App\Customer;

class PagesController extends Controller
{
     public function home(){

        $products = Product::all();
        return view('welcome')->with('products', $products);
    	//return view('welcome');
        

    }

    public function register(){
    	return view('pages.register');
    }

    public function login(){
    	return view('pages.login');
    }

    public function products(){
    	return view('pages.products');
    }

    public function product(){
    	return view('pages.product');
    }

    public function cart(){
    	return view('cart');
    }

    public function confirmation(){
    	return view('pages.confirmation');
    }
}
