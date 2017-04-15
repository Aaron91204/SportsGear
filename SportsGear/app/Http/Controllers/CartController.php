<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\ProductOrder;
use \Cart as Cart;
use Auth;
use Validator;
use DB;

class CartController extends Controller
{
    /**
     * Display the current contents of your cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Add an item to your cart. Also check to see if an item
     * already exists in your cart. (May remove that functionality)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your cart!');
        }

        Cart::add($request->id, $request->product_name, 1,  $request->cost)->associate('App\Product');
        return redirect('cart')->withSuccessMessage('Item was added to your cart!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove a specific item from your cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Empty all contents from your cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
                                  ->associate('App\Product');

        return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

    }

    /**
     * Adds purchase info to database and empties cart.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function purchaseItems()
    {
        $products = Cart::content();

        $user = Auth::user();

        $order = new Order();

        $order->customer_id = $user->id;
        $order->totalCost = Cart::total();
        $order->save();

        foreach($products as $product)
        {
            $productOrder = new ProductOrder;
            $productOrder->order_id = $order->id;
            $productOrder->product_id = $product->id;
            $productOrder->quantity = $product->qty;

            
            DB::table('products')
            ->where('id', $product->id )
            ->decrement('quantity', $product->qty);

            $productOrder ->save();
        }

        Cart::destroy();
        return redirect('home')->withSuccessMessage('Purchase successul!');

    }
}
