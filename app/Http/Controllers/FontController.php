<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Font;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class FontController extends Controller
{
    public function index()
    {
        return view('fonts', ['fonts' => Font::all()]);
    }

    public function store(Request $request)
    {
        if(count($request->names) == 0)
        {
            return back()->with('message', 'At least one font file is required.');
        }

        for($i=0; $i<count($request->names); $i++)
        {
            $font = new Font();
            $font->name = $request->names[$i]->getClientOriginalName();
            $font->save();

            Storage::disk('fonts')->putFileAs('', $request->names[$i], $request->names[$i]->getClientOriginalName());
        }

        Alert::success('Success', 'Fonts added successfully');

        return back();
    }

    public function delete($fontId)
    {
        $font = Font::find($fontId);
        $font->delete();
        Storage::disk('fonts')->delete($font->name);

        Alert::success('Success', 'Font deleted successfully');

        return back();
    }
}
