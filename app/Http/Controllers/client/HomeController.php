<?php

namespace App\Http\Controllers\client;

use App\Models\Seo;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Career;
use App\Models\Comment;
use App\Models\Feature;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $seo = Seo::where('page', 'home')->first();
        // Fetch the first 5 features for display
        $features = Feature::with('portfolio')->take(5)->get();
        return view('client.pages.home', compact('blogs', 'seo', 'features'));
    }

    // Category in Blogdetails page
    public function filterByCategory($category)
    {
        // Fetch blogs based on category and order by latest created_at
        $blogs = Blog::where('category', $category)
            ->orderBy('created_at', 'desc') // Orders by newest first
            ->get();

        return view('client.pages.category', compact('blogs', 'category'));
    }
    
    public function about()
    {
        $team = Team::get();
        $seo = Seo::where('page', 'about_us')->first();
        return view("client.pages.about", compact('seo', 'team'));
    }
    public function services()
    {
        $seo = Seo::where('page', 'services')->first();
        return view("client.pages.services", compact('seo'));
    }
    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $seo = Seo::where('page', 'blog')->first();
        return view("client.pages.blog", compact('blogs', 'seo'));
    }

    public function portfolio()
    {
        // Fetch portfolios with their category
        $portfolios = Portfolio::with('portfolio_category')->orderBy('title', 'ASC')->get();

        // Fetch only the relevant categories, up to "Mobile App Development"
        $categories = PortfolioCategory::whereIn('name', [
            'Website Development',
            'Graphics Design & Animation',
            'Logo Design & Branding',
            'Mobile App Development'
        ])->get();

        // Fetch SEO data for the portfolio page
        $seo = Seo::where('page', 'portfolio')->first();

        return view('client.pages.portfolio', compact('portfolios', 'categories', 'seo'));
    }

    public function contact()
    {
        return view("client.pages.contact");
    }
    public function webdevelopment()
    {
        return view("client.pages.service.web-development");
    }
    public function graphicsdesign()
    {
        return view("client.pages.service.graphicsdesign");
    }
    public function digitalmarketing()
    {
        return view("client.pages.service.digitalmarketing");
    }
    public function logoBranding()
    {
        return view("client.pages.service.logo-branding");
    }
    public function mobileAppDev()
    {
        return view("client.pages.service.mobile-app-dev");
    }
    public function uiuxdesign()
    {
        return view("client.pages.service.ui-ux-design");
    }
    public function photography()
    {
        return view("client.pages.service.photography");
    }
    public function videoshooting()
    {
        return view("client.pages.service.videoshooting");
    }
    public function videoediting()
    {
        return view("client.pages.service.videoediting");
    }

    public function blogdetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $categories = PortfolioCategory::all();
        $recentBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $comments = Comment::where('blog_id', $blog->id)->orderBy('created_at', 'desc')->get(); // Fetch comments in descending order
        $seo = Seo::where('page', 'blog_details')->first();
        return view("client.pages.blogdetails", compact('blog', 'categories', 'recentBlogs', 'comments', 'seo'));
    }



    public function uiuxblog()
    {
        return view("client.pages.uiuxblog");
    }
    public function projectdetails()
    {
        return view("client.pages.project-details");
    }
    public function websiteblog()
    {
        return view("client.pages.websiteblog");
    }
    public function career()
    {
        return view("client.pages.career");
    }
}
