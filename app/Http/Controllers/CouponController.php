<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use App\Models\Logo;
use RealRashid\SweetAlert\Facades\Alert;

class CouponController extends Controller
{
    public function index()
    {
        return view('coupons', [
            'coupons' => Coupon::all(),
        ]);
    }

    public function create()
    {
        return view('addCoupon', [
            'logos' => Logo::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'logo_id' => 'required',
            'code' => 'required',
            'discount' => 'required',
            'isActive' => 'required',
        ]);

        Coupon::create($data);

        Alert::success('Success', 'Logo Coupon added successfully');

        return redirect()->route('coupons');
    }

    public function edit($coupon)
    {
        return view('editCoupon', [
            'coupon' => Coupon::find($coupon),
            'logos' => Logo::all(),
        ]);
    }

    public function update(Request $request, $coupon)
    {
        $data = $request->validate([
            'logo_id' => 'required',
            'code' => 'required',
            'discount' => 'required',
            'isActive' => 'required',
        ]);

        Coupon::find($coupon)->update($data);

        Alert::success('Success', 'Logo Coupon updated successfully');

        return redirect()->route('coupons');
    }

    public function delete($coupon)
    {
        Coupon::find($coupon)->delete();

        Alert::success('Success', 'Logo Coupon deleted successfully');

        return redirect()->route('coupons');
    }
}
