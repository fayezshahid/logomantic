<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Wishlist;
use App\Models\Cart;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('website.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
            'phone' => 'required|numeric',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

        Auth::login($user);

        if(session('mode') == 'save')
        {   
            $wishlist = new Wishlist();
            $wishlist->user_id = auth()->user()->id;
            $wishlist->logo_id = session('saveLogoId');
            $wishlist->logo = session('saveLogoSRC');
            $wishlist->save();

            return redirect()->route('wishlist');
        }
        else if(session('mode') == 'purchase')
        {   
            $cart = new Cart();
            $cart->user_id = auth()->user()->id;
            $cart->logo_id = session('purchaseLogoId');
            $cart->logo = session('purchaseLogoSRC');
            $cart->isOrdered = 0;
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
}
