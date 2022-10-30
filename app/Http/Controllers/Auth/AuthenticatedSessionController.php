<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('website.login', ['mode' => 'null']);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->route('dashboard');

        $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember))
        {
            return back()->with('status', 'Invalid login details');
        }

        if($request->mode == 'save')
        {
            $wishlist = new Wishlist();
            $wishlist->user_id = auth()->user()->id;
            $wishlist->logo_id = $request->session()->get('saveLogoId');
            $wishlist->logo = $request->session()->get('saveLogoSRC');
            $wishlist->save();

            return redirect()->route('wishlist');
        }
        else if($request->mode == 'purchase')
        {
            $cart = new Cart();
            $cart->user_id = auth()->user()->id;
            $cart->logo_id = $request->session()->get('purchaseLogoId');
            $cart->logo = $request->session()->get('purchaseLogoSRC');
            $cart->save();
    
            $wishlist = Wishlist::where('logo_id', '=', $request->session()->get('purchaseLogoId'));
    
            if($wishlist)
            {
                $wishlist->delete();
            }
    
            return redirect()->route('cart');
        }

        return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
