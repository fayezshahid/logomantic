<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;

class OrderController extends Controller
{
    public function create()
    {
        return view('website.checkout');
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'country' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|numeric',
            'email' => 'required|string|max:255',
            'phone' =>'required|numeric',
            'payment' => 'required'
        ]);

        $data['user_id'] = auth()->user()->id;

        if($request->company)
            $data['comapny'] = $request->company;

        if($request->notes)
            $data['notes'] = $request->notes;

        Order::create($data);

        $logos = Cart::where('user_id', '=', auth()->user()->id)->get();
        foreach($logos as $logo)
        {
            $logo->isOrdered = 1;
            $logo->save();
        }

        return redirect()->route('cart');

    }
}
