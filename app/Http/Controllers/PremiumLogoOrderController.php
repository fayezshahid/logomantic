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
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'premium_logo_id' => 'required',
        ]);

        PremiumLogoOrder::create($data);

        return back()->with('status', 'Success. We will contact you soon.');
    }
}
