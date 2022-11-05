<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PremiumLogoOrder;

class PremiumLogoOrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:premium_logo_orders',
            'phone' => 'required|string|max:255',
            'premium_logo_id' => 'required',
        ]);

        PremiumLogoOrder::create($data);

        return redirect()->route('premium');
    }
}
