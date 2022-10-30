<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PremiumLogo;
use App\Models\LogoType;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class PremiumLogoController extends Controller
{
    public function index()
    {
        return view('premiumLogos', [
            'logos' => PremiumLogo::all(),
        ]);
    }

    public function create()
    {
        return view('addPremiumLogo', [
            'logoTypes' => LogoType::all(),
        ]);
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|integer',
            'logoType' => 'required',
            'image' => 'required',
        ]);
        
        $image = Storage::disk('logoImage')->putFile('', $request->image);
        $data['image'] = $image;

        PremiumLogo::create($data);

        Alert::success('Success', 'Logo added successfully');

        return redirect()->route('premiumLogos');
    }

    public function edit($logo)
    {
        return view('editPremiumLogo', [
            'logo' => PremiumLogo::find($logo),
            'logoTypes' => LogoType::all(),
        ]);
    }

    public function update(Request $request, $logo)
    {
        if($request->hiddenToken == 1)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|integer',
                'logoType' => 'required',
            ]);
        }
        else
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|integer',
                'logoType' => 'required',
                'image' => 'required',
            ]);

            $image = Storage::disk('logoImage')->putFile('', $request->image);
            $data['image'] = $image;
        }
        
        $logoUpdate = PremiumLogo::find($logo);
        $logoUpdate->update($data);

        Alert::success('Success', 'Logo updated successfully');

        return redirect()->route('premiumLogos');
    }

    public function delete($logoId)
    {
        $logo = PremiumLogo::find($logoId);
        $logo->delete();
        Storage::disk('logoImage')->delete($logo->image);
        
        Alert::success('Success', 'Logo deleted successfully');

        return back();
    }
}
