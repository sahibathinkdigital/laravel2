<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanFeature;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plans::get();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.plans_table', compact('plans'))->render();
        }
        return view('admin.pages.plans.index', compact('plans'));
    }

    public function store(Request $request)
    {
        // $validate = $request->validate(['name' => "required"]);
        // if ($validate) {
        $plan = Plans::create([
            'name' => $request->name,
            'price' => $request->price
        ]);
        if ($plan) {
            return response()->json(['status' => 'success', 'message' => "Plan created successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
        // } else {
        //     return response()->json(['data' => $validate]);
        // }
    }

    public function update(Request $request)
    {
    }

    public function destroy(Request $request)
    {
        $Plan =  Plans::destroy($request->id);
        if ($Plan) {
            return response()->json(['status' => 'success', 'message' => "Plan deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }


    // create features price
    public function indexFeatures()
    {
        $plans = Plans::with('planFeatures')->get();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.features_table', compact('plans'))->render();
        }
        return view('admin.pages.plans.features', compact('plans'));
    }
    public function storeFeatures(Request $request)
    {
        $plan = PlanFeature::create([
            'plan_id' => $request->plan,
            'feature' => $request->feature
        ]);
        if ($plan) {
            return response()->json(['status' => 'success', 'message' => "Feature created successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }
    public function destroyFeatures(Request $request)
    {
        $feature =  PlanFeature::destroy($request->id);
        if ($feature) {
            return response()->json(['status' => 'success', 'message' => "Feature deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }
}
