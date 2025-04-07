<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Featured_Manager;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{

   public function index(Request $request)
    {
    // Get all categories for the filter dropdown
    $categories = PortfolioCategory::all();
    // Build query to fetch portfolios
    $query = Portfolio::query();
    // If a category is selected, filter portfolios by category_id
    if ($request->has('category_id') && $request->category_id != '') {
        $query->where('portfolio_category_id', $request->category_id);
    }
    // Get the filtered portfolios in descending order by creation date
    $portfolios = $query->orderBy('created_at', 'desc')->get();
    // If it's an AJAX request, return the table view only
    if ($request->ajax()) {
        return view('admin.ajaxComponents.portfolio_table', compact('portfolios'));
    }
    // Return the full page with the portfolios and categories
    return view('admin.pages.portfolio.index', compact('portfolios', 'categories'));
    }

   
    public function create()
    {
        return view('admin.pages.portfolio.create');
    }

    public function store(Request $request)
    {
        dd($request->all(), $request->file('image'));
        $request->validate([
            'title' => 'required|string|max:255',
            // 'type_of' => 'required|string|max:255',
            'category' => 'required|exists:portfolio_categories,id',
            'image' => 'required|image|max:2048',
            'link' => 'nullable|url', // Make `link` optional and validate as a URL if provided
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/portfolio/';
            $file->move(public_path($path), $filename);
        }
        $portfolioData = [
            'title' => $request->title,
            // 'typeof' => $request->type_of,
            'portfolio_category_id' => $request->category,
            'image_path' => $path . $filename,
        ];
        // Include `website_url` only if it's not empty
        if (!empty($request->link)) {
            $portfolioData['website_url'] = $request->link;
        }
        $portfolio = Portfolio::create($portfolioData);
        if ($portfolio) {
            return response()->json(['status' => 'success', 'message' => "Portfolio created successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
        }
    }

    // PortfolioController.php
    public function edit($id)
    {
        $data = Portfolio::find($id);
        if (!$data) {
            return redirect()->route('admin.portfolio')->with('error', 'Portfolio not found.');
        }
        $category = PortfolioCategory::all(); // Or however you retrieve categories
        return view('admin.pages.portfolio.edit', compact('data', 'category'));
    }

   public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            // 'type_of' => 'required|string|max:255',
            'category' => 'required|exists:portfolio_categories,id',
            'image' => 'required|image|max:2048',
            'link' => 'nullable|url',
        ]);
        // Find portfolio or fail
        $portfolio = Portfolio::findOrFail($id);
        // Update portfolio data
        $portfolio->title = $request->title;
        // $portfolio->typeof = $request->type_of;
        $portfolio->portfolio_category_id = $request->category;
        $portfolio->website_url = $request->link;
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (!empty($portfolio->image_path) && file_exists(public_path($portfolio->image_path))) {
                File::delete(public_path($portfolio->image_path));
            }
            // Upload new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/portfolio/';
            $file->move($path, $filename);
            $portfolio->image_path = $path . $filename;
        }
        // Save and redirect
        if ($portfolio->save()) {
            return redirect()->route('admin.portfolio', $id)
                ->with('success', 'Portfolio updated successfully');
        }
        return redirect()->route('admin.portfolio', $id)
            ->with('error', 'Something went wrong while updating the portfolio');
    }

  public function destroy(Request $request)
    {
        // Find the portfolio by ID
        $portfolio = Portfolio::find($request->id);

        if ($portfolio) {
         // Check and delete the associated image
            if (!empty($portfolio->image_path) && file_exists(public_path($portfolio->image_path))) {
                unlink(public_path($portfolio->image_path)); // Delete the file
            }

            // Delete the portfolio entry from the database
            if ($portfolio->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Portfolio deleted successfully']);
            }

                return response()->json(['status' => 'error', 'message' => 'Failed to delete portfolio']);
            }

        return response()->json(['status' => 'error', 'message' => 'Portfolio not found']);
    }


    // portfolio category
    public function portfolioCategory()
    {
        $PortfolioCategory = PortfolioCategory::get();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.category', compact('PortfolioCategory'))->render();
        }
        return view('admin.pages.portfolio.category', compact('PortfolioCategory'));
    }

    public function categoryStore(Request $request)
    {
        $validate = $request->validate(['name' => "required"]);
        if ($validate) {
            $portfolio = PortfolioCategory::create(['name' => $request->name]);
            if ($portfolio) {
                return response()->json(['status' => 'success', 'message' => "Category created successfully"]);
            } else {
                return response()->json(['status' => 'error', 'message' => "something went wrong"]);
            }
        } else {
            return response()->json(['data' => $validate]);
        }
    }

    public function categoryDelete(Request $request)
    {
        $portfolio =  PortfolioCategory::destroy($request->id);
        if ($portfolio) {
            return response()->json(['status' => 'success', 'message' => "Category deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }

    // category edit
    public function categoryEdit($id)
    {
        // Find the category or fail if not found
        $category = PortfolioCategory::find($id);
        if (!$category) {
            return redirect()->route('admin.portfolioCategory')->with('error', 'Category not found.');
        }
        // Pass the category to the view
        return view('admin.pages.portfolio.category_edit', compact('category'));
    }
    //Category Update
    public function categoryUpdate(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        // Find the category or fail
        $category = PortfolioCategory::findOrFail($id);
        // Update category name
        $category->name = $request->name;
        // Save the updated category
        if ($category->save()) {
            return redirect()->route('admin.portfolioCategory')
                ->with('success', 'Category updated successfully');
        }
        return redirect()->route('admin.portfolioCategory')
            ->with('error', 'Something went wrong while updating the category');
    }
    //----------------------------------------------------------//
    public function portfolioFeatured(Request $request)
    {
        $portfolio = Portfolio::findOrFail($request->id);
        $portfolio->featured = !$portfolio->featured;
        if ($portfolio->save()) {
            return response()->json(['status' => 'success', 'message' => "Portfolio featured updated successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }

    //------------------Featured manager--------------------//
    public function featuredlist()
    {
        $portfolio = Portfolio::where('featured', true)->get(); // Make sure this query is correct
        $featured = Featured_Manager::with('portfolios')->get(); // Correct relationship
        if (request()->ajax()) {
            return view('admin.ajaxComponents.fetured_portfolio_table', compact('featured'))->render();
        }
        return view('admin.pages.portfolio.featured', compact('portfolio', 'featured')); // Ensure this view exists
    }

    public function featuredCreate(Request $request)
    {
        // Validate all the required fields
        $request->validate([
            'featured_portfolio' => 'required|exists:portfolios,id',
            'column_span' => 'required|integer|min:4|max:12',
            'typeof' => 'required|string',
            'website_link' => 'required|url',
            'image' => 'required|image', // Add validation for image file
        ]);

        // Store the image and get its path
        $imagePath = $request->file('image')->store('images', 'public');

        // Create the Featured_Manager entry
        $featured = Featured_Manager::create([
            'portfolio_id' => $request->featured_portfolio,
            'cols' => $request->column_span,
            'typeof' => $request->typeof,
            'website_link' => $request->website_link,
            'image_path' => $imagePath,  // Store the image path
        ]);

        if ($featured) {
            return response()->json(['status' => 'success', 'message' => "Portfolio featured added successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
        }
    }

    public function featuredDelete(Request $request)
    {
        $request->validate(['id' => 'required|exists:featured_manager,id']);
        $featured = Featured_Manager::destroy($request->id);
        if ($featured) {
            return response()->json(['status' => 'success', 'message' => "Portfolio featured deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
        }
    }

    public function featuredEdit(Request $request)
    {
        $portfolio = Portfolio::where('featured', true)->get();
        return view('admin.ajaxComponents.edit.fetured_portfolio', compact('portfolio'));
    }
    //---------------------End of feature part-----------------//
}
