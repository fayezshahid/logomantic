<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\PlanItem;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    public function index()
    {
        return view('plans', [
            'plans' => Plan::all(),
        ]);
    }

    public function create()
    {
        return view('addPlan');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'item1' => 'required',
        ]);

        $plan = Plan::create($data);

        for($i=1; $i<=$request->itemCount; $i++)
        {
            $tmp = 'item'.$i;
            if($request->$tmp != null)
            {
                $item = new PlanItem;
                $item->plan_id = $plan->id;
                $item->item = $request->$tmp;
                $item->save();
            }
        }

        Alert::success('Success', 'Plan added successfully');

        return redirect()->route('plans');
    }

    public function edit($plan)
    {
        return view('editPlan', [
            'plan' => Plan::find($plan),
        ]);
    }

    public function update(Request $request, $plan)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'item1' => 'required',
        ]);

        $plan = Plan::find($plan);
        $plan->update($data);
        $plan->items()->delete();

        for($i=1; $i<=$request->itemCount; $i++)
        {
            $tmp = 'item'.$i;
            if($request->$tmp != null)
            {
                $item = new PlanItem;
                $item->plan_id = $plan->id;
                $item->item = $request->$tmp;
                $item->save();
            }
        }

        Alert::success('Success', 'Plan updated successfully');

        return redirect()->route('plans');
    }

    public function delete($coupon)
    {
        $plan = Plan::find($coupon);
        $plan->delete();
        $plan->items()->delete();

        Alert::success('Success', 'Plan deleted successfully');

        return redirect()->route('plans');
    }
}
