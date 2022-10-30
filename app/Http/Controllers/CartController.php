<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Wishlist;

class CartController extends Controller
{

    public function index()
    {
        return view('website.cart', ['cartItems' => Cart::where('user_id', '=', auth()->user()->id)->where('isOrdered', '=', 0)->get()]);
    }

    public function store(Request $request)
    {
        $request->session()->put('purchaseLogoSRC', $request->logo);
        $request->session()->put('purchaseLogoId', $request->logoId);

        if(!auth()->user())
            return view('website.login', ['mode' => 'purchase']);
        
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->logo_id = $request->logoId;
        $cart->logo = $request->logo;
        $cart->isOrdered = 0;
        $cart->save();

        $wishlist = Wishlist::where('logo_id', '=', $request->logoId);

        if($wishlist)
        {
            $wishlist->delete();
        }

        return redirect()->route('cart');
    }

    public function delete($id)
    {
        Cart::find($id)->delete();
        return back();
    }
}
