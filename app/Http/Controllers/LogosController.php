<?php

namespace App\Http\Controllers;
use App\Models\LogoType;
// use App\Models\Color;
use App\Models\Logo;
// use App\Models\Color_Logo;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function index()
    {
        return view('logo', [
            'logos' => Logo::all(),
        ]);
    }

    public function addLogo()
    {
        return view('addLogo', [
            'logoTypes' => LogoType::all(),
            // 'colors' => Color::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string',
            'logoType' => 'required',
            'image' => 'required',
        ]);
        
        $image = Storage::disk('logoImage')->putFile('', $request->image);
        $data['image'] = $image;
        
        Logo::create($data);

        Alert::success('Success', 'Logo added successfully');

        return redirect()->route('logos');
    }

    public function edit($logo)
    {
        return view('editLogo', [
            'logo' => Logo::find($logo),
            'logoTypes' => LogoType::all(),
            // 'colors' => Color::all(),
        ]);
    }

    public function update(Request $request, $logo)
    {
        if($request->hiddenToken == 1)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|string',
                'logoType' => 'required',
            ]);
        }
        else
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|string',
                'logoType' => 'required',
                'image' => 'required',
            ]);

            $image = Storage::disk('logoImage')->putFile('', $request->image);
            $data['image'] = $image;
        }
        
        $logoUpdate = Logo::find($logo);
        $logoUpdate->update($data);

        Alert::success('Success', 'Logo updated successfully');

        return redirect()->route('logos');
    }

    public function delete($logo)
    {
        Logo::find($logo)->delete();

        Alert::success('Success', 'Logo deleted successfully');

        return back();
    }

    public function allLogos(Request $request)
    {
        return view('website.services-details', [
            'logos' => Logo::where('logoType', '=', $request->logoType)->get(),
            'industries' => LogoType::all(),
            'logoType' => $request->logoType,
            'bName' => $request->bName,
        ]);
    }

    public function customizeLogo(Request $request)
    {
        $logo = Logo::find($request->logoId);
        return view('website.logo-tool', [
            'logo' => $logo, 
            'bName' => $request->bName,
            'fontColor' => $request->fontColor,
            'fontFamily' => $request->fontFamily
        ]);
    }

}
