<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        return view('website.wishlist', ['wishlists' => Wishlist::where('user_id', '=', auth()->user()->id)->get()]);
    }

    public function store(Request $request)
    {
        $request->session()->put('saveLogoSRC', $request->logo);
        $request->session()->put('saveLogoId', $request->logoId);

        if(!auth()->user())
            return view('website.login', ['mode' => 'save']);
        
        $wishlist = new Wishlist();
        $wishlist->user_id = auth()->user()->id;
        $wishlist->logo_id = $request->logoId;
        $wishlist->logo = $request->logo;
        $wishlist->save();

        return redirect()->route('wishlist');
    }

    public function delete($id)
    {
        Wishlist::find($id)->delete();
        return back();
    }
}
