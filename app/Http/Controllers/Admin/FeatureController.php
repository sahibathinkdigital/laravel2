<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    public function index()
    {
        // Fetch all features and their associated portfolios
        $features = Feature::with('portfolio')->get(); // Assuming Feature has a relation with Portfolio
        // Pass features to the view
        return view('admin.ajaxComponents.features_table', compact('features'));
    }


    public function create()
    {
        // Fetch only portfolios where 'featured' is true
        $portfolios = Portfolio::where('featured', 1)->get();
        return view('admin.pages.feature.index', compact('portfolios'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'portfolio_id'  => 'required|exists:portfolios,id',
                'typeof'        => 'required|string|max:255',
                'website_link'  => 'nullable|url',
                'image'         => 'required|image|max:2048', // Max file size is 2MB
            ]);

            // Handle the image upload
            $imagePath = null;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/features/'), $filename);
                $imagePath = 'uploads/features/' . $filename;
            } else {
                return redirect()->back()->withErrors(['image' => 'Invalid or missing image.']);
            }

            // Save the feature to the database
            Feature::create([
                'portfolio_id' => $validated['portfolio_id'],
                'typeof'       => $validated['typeof'],
                'website_link' => $validated['website_link'], // Nullable, so no need for `?? null`
                'image_path'   => $imagePath,
            ]);

            // Redirect with a success message
            return redirect()->route('admin.featuredList')->with('success', 'Feature created successfully!');
        } catch (\Exception $e) {
            // Handle unexpected errors
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    public function edit(string $id)
    {
        // Fetch the feature by ID
        $feature = Feature::findOrFail($id);
        // Fetch all portfolios where 'featured' is true
        $portfolios = Portfolio::where('featured', 1)->get();
        // Pass the feature and portfolios to the edit view
        return view('admin.pages.feature.edit', compact('feature', 'portfolios'));
    }

    public function update(Request $request, string $id)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'portfolio_id'  => 'required|exists:portfolios,id',
            'typeof'        => 'required|string|max:255',
            'website_link'  => 'nullable|url',
            'image'         => 'nullable|image|max:2048', // Optional image update, max size 2MB
        ]);

        // Fetch the feature by ID
        $feature = Feature::findOrFail($id);
        // Check if a new image was uploaded
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Get the uploaded file
            $file = $request->file('image');
            // Generate a random name for the image to avoid overwriting
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            // Move the file to the 'public/uploads/features/' directory
            $file->move(public_path('uploads/features/'), $filename);
            // Set the new image path
            $validated['image_path'] = 'uploads/features/' . $filename;
            // Optionally, delete the old image if needed
            if ($feature->image_path && file_exists(public_path($feature->image_path))) {
                unlink(public_path($feature->image_path));
            }
        } else {
            // Preserve the old image path if no new image is uploaded
            $validated['image_path'] = $feature->image_path;
        }
        // Update the feature in the database
        $feature->update([
            'portfolio_id' => $validated['portfolio_id'],
            'typeof' => $validated['typeof'],
            'website_link' => $validated['website_link'],
            'image_path' => $validated['image_path'],
        ]);

        // Redirect with success message
        return redirect()->route('admin.featuredList')->with('success', 'Feature updated successfully!');
    }


    public function destroy(Request $request, string $id)
    {
        $feature = Feature::findOrFail($id);

        // Delete the image file if it exists
        if ($feature->image_path && file_exists(public_path($feature->image_path))) {
            unlink(public_path($feature->image_path));
        }
        // Delete the feature
        $feature->delete();
        // Redirect with a success message
        return redirect()->route('admin.featuredList')->with('success', 'Feature deleted successfully!');
    }
}
