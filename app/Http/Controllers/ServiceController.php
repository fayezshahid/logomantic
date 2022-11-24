<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Package;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services', [
            'packages' => Package::all(),
        ]);
    }

    public function create()
    {
        return view('addService', [
            'packages' => Package::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'service1' => 'required',
            'price1' => 'required|integer',
        ]);

        for($i=1; $i<=$request->serviceCount; $i++)
        {
            $tmp1 = 'service'.$i;
            $tmp2 = 'price'.$i;
            if($request->$tmp1 != null &&  $request->$tmp2 != null)
            {
                $service = new Service;
                $service->package_id = $request->package_id;
                $service->service = $request->$tmp1;
                $service->price = $request->$tmp2;
                $service->save();
            }
        }

        Alert::success('Success', 'Service added successfully');

        return redirect()->route('services');
    }

    public function edit($package)
    {
        return view('editService', [
            'package' => Package::find($package),
            'packages' => Package::all(),
        ]);
    }

    public function update(Request $request, $package)
    {
        $request->validate([
            'package_id' => 'required',
            'service1' => 'required',
            'price1' => 'required|integer',
        ]);

        $package = Package::find($package);
        $package->services()->delete();

        for($i=1; $i<=$request->serviceCount; $i++)
        {
            $tmp1 = 'service'.$i;
            $tmp2 = 'price'.$i;
            if($request->$tmp1 != null &&  $request->$tmp2 != null)
            {
                $service = new Service;
                $service->package_id = $request->package_id;
                $service->service = $request->$tmp1;
                $service->price = $request->$tmp2;
                $service->save();
            }
        }

        Alert::success('Success', 'Service updated successfully');

        return redirect()->route('services');
    }

    public function delete($package)
    {
        $package = Package::find($package);
        $package->services()->delete();

        Alert::success('Success', 'Service deleted successfully');

        return redirect()->route('services');
    }

    public function getServices($packageId)
    {
        return Service::where('package_id', $packageId)->get();
    }
}
