<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function home(){
    	return view('pages.home');
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
