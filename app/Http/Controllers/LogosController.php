<?php

namespace App\Http\Controllers;
use App\Models\LogoType;
use App\Models\Hexcode;
use App\Models\Logo;
use App\Models\Font;
use App\Models\Display;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function index()
    {
        // $contents = Storage::disk('google')->listContents();
        // $paths = array_column($contents, 'path');
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
            'price' => 'required|integer',
            'logoType' => 'required',
            'image' => 'required|mimes:png',
            'hexcode1' => 'required',
        ]);
        
        $image = Storage::disk('logoImage')->putFile('', $request->image);
        $data['image'] = $image;

        // $contents = collect(Storage::disk('google')->listContents());
        // $path = $contents->where('name', '=', $image)->first();
        // $data['path'] = $path['path'];

        $logo = Logo::create($data);

        for($i=1; $i<=$request->hexInputCount; $i++)
        {
            $tmp = 'hexcode'.$i;
            if($request->$tmp != null)
            {
                $hexcode = new Hexcode;
                $hexcode->logo_id = $logo->id;
                $hexcode->hexcode = str_replace('#', '', strtoupper($request->$tmp));
                $hexcode->save();
            }
        }

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
                'image' => 'required|mimes:png',
            ]);

            $image = Storage::disk('logoImage')->putFile('', $request->image);
            $data['image'] = $image;

            // $contents = collect(Storage::disk('google')->listContents());
            // $path = $contents->where('name', '=', $image)->first();
            // $data['path'] = $path['path'];

        }
        
        $logoUpdate = Logo::find($logo);
        $logoUpdate->update($data);
        $logoUpdate->hexcodes()->delete();

        for($i=1; $i<=$request->hexInputCount; $i++)
        {
            $tmp = 'hexcode'.$i;
            if($request->$tmp != null)
            {
                $hexcode = new Hexcode;
                $hexcode->logo_id = $logoUpdate->id;
                $hexcode->hexcode = str_replace('#', '', strtoupper($request->$tmp));
                $hexcode->save();
            }
        }

        Alert::success('Success', 'Logo updated successfully');

        return redirect()->route('logos');
    }

    public function delete($logoId)
    {
        $logo = Logo::find($logoId);
        $logo->delete();
        $logo->hexcodes()->delete();
        // Storage::disk('google')->delete($logo->path);
        Storage::disk('logoImage')->delete($logo->image);
        
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
            'fonts' => Font::all()
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

    public function getFonts()
    {
        return Font::all();
    }

    public function changeDisplay()
    {
        if(Display::find(1))
        {
            $d = Display::find(1);
            if($d->view == 1)
                $d->view = 0;
            else
                $d->view = 1;
            $d->save();
        }
        else
        {
            $d = new Display();
            $d->view = 0;
            $d->save();
        }
    }

}
