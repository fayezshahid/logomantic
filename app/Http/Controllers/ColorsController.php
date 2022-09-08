<?php

namespace App\Http\Controllers;
use App\Models\Color;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index()
    {
        return view('colors', ['colors' => Color::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Color::create($data);

        Alert::success('Success', 'Color added successfully');

        return back();
    }

    public function delete($logoType)
    {
        Color::find($logoType)->delete();

        Alert::success('Success', 'Color deleted successfully');

        return back();
    }

}
