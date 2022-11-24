<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Logo;
use App\Models\Cart_Order;
use App\Models\Coupon;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $logoIds = Cart::where('user_id', auth()->user()->id)->where('isOrdered', 0)->pluck('logo_id');
        return view('website.checkout', [
            'amount' => $request->amount,
        ]);
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
            'amount' => 'required',
            'payment' => 'required'
        ]);

        $data['user_id'] = auth()->user()->id;

        if($request->company)
            $data['company'] = $request->company;

        if($request->notes)
            $data['notes'] = $request->notes;

        $data['isCompleted'] = 0;

        $order = Order::create($data);

        $logos = Cart::where('user_id', '=', auth()->user()->id)->where('isOrdered', '=', 0)->get();
        foreach($logos as $logo)
        {
            $logo->isOrdered = 1;
            $logo->save();

            $c = new Cart_Order();
            $c->cart_id = $logo->id;
            $c->order_id = $order->id;
            $c->save();
        }

        return redirect()->route('cart');
    }

    public function checkCoupon($coupon)
    {
        $discount = Coupon::where('code', $coupon)->where('isActive', 1)->value('discount');
        
        if($discount)
            return $discount;
        else
            return 0;
    }

}
