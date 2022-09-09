<?php

namespace App\Http\Controllers;
use App\Models\DesignCategory;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class DesignCategoryController extends Controller
{
    public function index()
    {
        return view('designCategories', ['designCategories' => DesignCategory::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DesignCategory::create($data);

        Alert::success('Success', 'Design Category added successfully');

        return back();
    }

    public function delete($designCategory)
    {
        DesignCategory::find($designCategory)->delete();

        Alert::success('Success', 'Design Category deleted successfully');

        return back();
    }
}
