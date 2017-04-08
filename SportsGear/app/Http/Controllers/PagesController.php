<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Product;
use App\Customer;

class PagesController extends Controller
{
     public function home(){
        /*$staff = Staff::whereFirstname('Iain')->first();
        $products = Product::whereCategory('Cricket');*/



    	return view('welcome');
        

        /*echo $staff->firstname;
        echo $staff->surname;
        echo $staff->email;
        echo $staff->username;
        echo $staff->password;*/

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
    	return view('pages.cart');
    }

    public function confirmation(){
    	return view('pages.confirmation');
    }
}
