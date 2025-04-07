<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seo = Seo::all();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.seo_table', compact('seo'))->render();
        }
        return view('admin.pages.seo.index', compact('seo'));
    }

    public function store(Request $request)
    {
        $checkpage = Seo::where('page', $request->page)->first();

        // If page data exists, update it instead of blocking the submission
        if($checkpage) {
            $seo = $checkpage;
        } else {
            $seo = new Seo;
        }

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/seo/';
            $file->move($path, $filename);
            $seo->image = $path . $filename;
        }

        $seo->title = $request->title;
        $seo->desc = $request->desc;
        $seo->page = $request->page;
        $seo->keywords = $request->keywords;

        if ($seo->save()) {
            return response()->json(['status' => 'success', 'message' => "SEO data inserted/updated successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
        }
    }

    public function edit($id)
    {
        $seo = Seo::find($id);
        if ($seo) {
            return response()->json(['status' => 'success', 'data' => $seo]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'SEO data not found.']);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'keywords' => 'required',
            'image' => 'image'
        ]);

        $seo = Seo::find($id);
        if (!$seo) {
            return response()->json(['status' => 'error', 'message' => 'SEO data not found.']);
        }

        if ($request->file('image')) {
            // Delete old image if needed
            if ($seo->image) {
                $oldImagePath = public_path($seo->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/seo/';
            $file->move($path, $filename);
            $seo->image = $path . $filename;
        }

        $seo->title = $request->title;
        $seo->desc = $request->desc;
        $seo->page = $request->page;
        $seo->keywords = $request->keywords;

        if ($seo->save()) {
            return response()->json(['status' => 'success', 'message' => "SEO data updated successfully."]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Something went wrong."]);
        }
    }

    public function destroy(Request $request)
    {
        $seo = Seo::find($request->id);
        if ($seo) {
            // Optionally delete the image file as well
            if ($seo->image) {
                $oldImagePath = public_path($seo->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $seo->delete();
            return response()->json(['status' => 'success', 'message' => 'SEO data deleted successfully.']);
        }
        return response()->json(['status' => 'error', 'message' => 'SEO data not found.']);
    }
}
