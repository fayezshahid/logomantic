<?php

namespace App\Http\Controllers;
use App\Models\DesignCategory;
use App\Models\Design;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
    {
        return view('design', [
            'designs' => Design::all(),
        ]);
    }

    public function create()
    {
        return view('addDesign', [
            'designCategories' => DesignCategory::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|integer',
            'designCategory' => 'required',
            'image' => 'required',
        ]);
        
        $image = Storage::disk('logoImage')->putFile('', $request->image);
        $data['image'] = $image;

        // $contents = collect(Storage::disk('google')->listContents());
        // $path = $contents->where('name', '=', $image)->first();
        // $data['path'] = $path['path'];

        Design::create($data);

        Alert::success('Success', 'Design Card created successfully');

        return redirect()->route('designs');
    }

    public function edit($design)
    {
        return view('editDesign', [
            'design' => Design::find($design),
            'designCategories' => DesignCategory::all(),
        ]);
    }

    public function update(Request $request, $design)
    {
        if($request->hiddenToken == 1)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|integer',
                'designCategory' => 'required',
            ]);
        }
        else
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'price' => 'required|integer',
                'designCategory' => 'required',
                'image' => 'required',
            ]);

            $image = Storage::disk('logoImage')->putFile('', $request->image);
            $data['image'] = $image;

            // $contents = collect(Storage::disk('google')->listContents());
            // $path = $contents->where('name', '=', $image)->first();
            // $data['path'] = $path['path'];
        }

        $designUpdate = Design::find($design);
        $designUpdate->update($data);

        Alert::success('Success', 'Design Card updated successfully');

        return redirect()->route('designs');
    }

    public function delete($designId)
    {
        $design = Design::find($designId);
        $design->delete();

        // Storage::disk('google')->delete($design->path);
        Storage::disk('logoImage')->delete($design->image);

        Alert::success('Success', 'Design Card deleted successfully');

        return back();
    }
}
