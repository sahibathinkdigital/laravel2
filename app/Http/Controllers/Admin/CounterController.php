<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counter = Counter::get();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.counter_table', compact('counter'))->render();
        }
        return view('admin.pages.counter.index', compact('counter'));
    }

    public function store(Request $request)
    {
        $count = Counter::get();
        if (count($count) >= 3) {
            return response()->json(['status' => 'error', 'message' => "Only allowed Three entries"]);
        } else {
            $counter = Counter::create([
                'title' => $request->title,
                'count' => $request->count,
            ]);
            if ($counter) {
                return response()->json(['status' => 'success', 'message' => "Counter created successfully"]);
            } else {
                return response()->json(['status' => 'error', 'message' => "something went wrong"]);
            }
        }
    }

    public function destroy(Request $request)
    {
        $counter =  Counter::destroy($request->id);
        if ($counter) {
            return response()->json(['status' => 'success', 'message' => "Counter deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }
}
