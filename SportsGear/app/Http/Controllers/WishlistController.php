<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;

class WishlistController extends Controller
{
    /**
     * View the contents of your wishlist.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlist');
    }

    /**
     * Add a product to your wishlist. Handles whether the item
     * already exists in your wishlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('shop')->withSuccessMessage('Item is already in your wishlist!');
        }

        Cart::instance('wishlist')->add($request->id, $request->product_name, 1,  $request->cost)
                                  ->associate('App\Product');

        return redirect('shop')->withSuccessMessage('Item was added to your wishlist!');
    }

    /**
     * Remove a product from your wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        return redirect('wishlist')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Empty your wishlist.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyWishlist()
    {
        Cart::instance('wishlist')->destroy();
        return redirect('wishlist')->withSuccessMessage('Your wishlist has been cleared!');
    }

    /**
     * Switch item from wishlist to shopping cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);

        Cart::instance('wishlist')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your shopping cart!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
                                 ->associate('App\Product');

        return redirect('wishlist')->withSuccessMessage('Item has been moved to your shopping cart!');

    }
}
