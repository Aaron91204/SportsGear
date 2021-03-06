<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop')->with('products', $products);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $interested = Product::where('slug', '!=', $slug)->where('category', '=', $product->category)->get()->random(4);
       

        return view('product')->with(['product' => $product, 'interested' => $interested]);
    }

    /**
     * Display the specified category view.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {   
        $products = Product::where('category', '=', $request->category)->get();
        return view('category')->with('products', $products);
    }
}
