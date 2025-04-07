<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
{
    $blogs = Blog::orderBy('created_at', 'desc')->get(); // Fetch blogs in descending order by 'created_at'

    if (request()->ajax()) {
        return view('admin.ajaxComponents.blog_table', compact('blogs'))->render();
    }

    return view('admin.pages.blog.index', compact('blogs'));
}

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'desc' => 'required|string',
            'seo_desc' => 'nullable|string',
            'keywords' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Image handling
        $filename = null;
        $path = 'uploads/blog/';
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        // Slug creation
        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'LIKE', "{$slug}%")->count();
        $final_slug = $count ? "{$slug}-{$count}" : $slug;
        $category_slug = Str::slug($request->category);

        // Data array for the blog
        $blogData = [
            'title' => $request->title,
            'desc' => $request->desc,
            'slug' => $final_slug,
            'category' => $request->category,
            'category_slug' => $category_slug,
            'image_path' => $filename ? $path . $filename : null,
            'seo_desc' => $request->seo_desc,
            'keywords' => $request->keywords,
        ];

        // Create blog entry
        $blog = Blog::create($blogData);
        return $blog
            ? response()->json(['status' => 'success', 'message' => "Blog created successfully"])
            : response()->json(['status' => 'error', 'message' => "Something went wrong"]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'desc' => 'required|string',
            'seo_desc' => 'nullable|string',
            'keywords' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->route('admin.blog')->with('error', 'Blog not found.');
        }

        // Handle image upload
        if ($request->file('image')) {
            if (file_exists($blog->image_path)) {
                File::delete($blog->image_path);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/blog/';
            $file->move($path, $filename);
            $blog->image_path = $path . $filename;
        }

        // Slug creation
        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $id)->count();
        $final_slug = $count ? "{$slug}-{$count}" : $slug;
        $category_slug = Str::slug($request->category);

        // Update blog fields
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->slug = $final_slug;
        $blog->category = $request->category;
        $blog->category_slug = $category_slug;
        $blog->seo_desc = $request->seo_desc;
        $blog->keywords = $request->keywords;

        return $blog->save()
            ? redirect()->route('admin.blog')->with('success', 'Blog updated successfully')
            : redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.pages.blog.edit', compact('blog'));
    }


    public function destroy(Request $request)
    {
        $blog = Blog::find($request->id);
        if ($blog) {
            if (file_exists($blog->image_path)) {
                File::delete($blog->image_path);
            }
            return $blog->delete()
                ? response()->json(['status' => 'success', 'message' => "Blog deleted successfully"])
                : response()->json(['status' => 'error', 'message' => "Something went wrong"]);
        }
        return response()->json(['status' => 'error', 'message' => "Blog not found"]);
    }
}
