<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageItem;
use RealRashid\SweetAlert\Facades\Alert;

class PackageController extends Controller
{
    public function index()
    {
        return view('packages', [
            'packages' => Package::all(),
        ]);
    }

    public function create()
    {
        return view('addPackage');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'item1' => 'required',
        ]);

        $package = Package::create($data);

        for($i=1; $i<=$request->itemCount; $i++)
        {
            $tmp = 'item'.$i;
            if($request->$tmp != null)
            {
                $item = new PackageItem;
                $item->package_id = $package->id;
                $item->item = $request->$tmp;
                $item->save();
            }
        }

        Alert::success('Success', 'Package added successfully');

        return redirect()->route('packages');
    }

    public function edit($package)
    {
        return view('editPackage', [
            'package' => Package::find($package),
        ]);
    }

    public function update(Request $request, $package)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'item1' => 'required',
        ]);

        $package = Package::find($package);
        $package->update($data);
        $package->items()->delete();

        for($i=1; $i<=$request->itemCount; $i++)
        {
            $tmp = 'item'.$i;
            if($request->$tmp != null)
            {
                $item = new PackageItem;
                $item->package_id = $package->id;
                $item->item = $request->$tmp;
                $item->save();
            }
        }

        Alert::success('Success', 'Package updated successfully');

        return redirect()->route('packages');
    }

    public function delete($coupon)
    {
        $package = Package::find($coupon);
        $package->delete();
        $package->items()->delete();
        $package->services()->delete();

        Alert::success('Success', 'Package deleted successfully');

        return redirect()->route('packages');
    }
}
