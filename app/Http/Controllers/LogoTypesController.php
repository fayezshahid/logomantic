<?php

namespace App\Http\Controllers;
use App\Models\LogoType;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class LogoTypesController extends Controller
{
    public function index()
    {
        return view('logotypes', ['logoTypes' => LogoType::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        LogoType::create($data);

        Alert::success('Success', 'Logo Type added successfully');

        return back();
    }

    public function delete($logoType)
    {
        LogoType::find($logoType)->delete();

        Alert::success('Success', 'Logo Type deleted successfully');

        return back();
    }
}
