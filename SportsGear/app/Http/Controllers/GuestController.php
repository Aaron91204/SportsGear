<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Product;
use App\Customer;

class GuestController extends Controller
{
     
    /**
     * Welcome page to display a random selection of products to the user.
     *
     * @return \Illuminate\Http\Response
     */
     public function home(){

        $products = Product::get()->random(8);
        return view('welcome')->with('products', $products);

    }
    public function categories(){
    	$products=Product::select('category')->distinct()->orderBy('category')->get();
    	return view('categories')->with('products',$products);
    }

    
}
