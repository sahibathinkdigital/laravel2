<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;

//-----------------------Client routes---------------------------------//
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/our-services', [HomeController::class, 'services'])->name('services');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogs/{slug}', [HomeController::class, 'blogdetails'])->name('blogdetails');
// Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/uiuxblog', [HomeController::class, 'uiuxblog'])->name('uiuxblog');
Route::get('/websiteblog', [HomeController::class, 'websiteblog'])->name('websiteblog');
Route::get('/our-work', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/projectdetails', [HomeController::class, 'projectdetails'])->name('projectdetails');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/our-services/web-development', [HomeController::class, 'webdevelopment'])->name('web-development');
Route::get('/our-services/digital-marketing', [HomeController::class, 'digitalmarketing'])->name('digitalmarketing');
Route::get('/our-services/graphic-design', [HomeController::class, 'graphicsdesign'])->name('graphicsdesign');
Route::get('/our-services/logo-branding', [HomeController::class, 'logoBranding'])->name('Logo &  Branding');
Route::get('/our-services/mobile-app-development', [HomeController::class, 'mobileAppDev'])->name('Mobile App Development');
Route::get('/our-services/UI-UX-design', [HomeController::class, 'uiuxdesign'])->name('UI & UX Design');
Route::get('/our-services/video-shooting', [HomeController::class, 'videoshooting'])->name('Video Shooting & Editing');
Route::get('/our-services/photography', [HomeController::class, 'photography'])->name('Photography');
Route::get('/our-services/video-editing-animation', [HomeController::class, 'videoediting'])->name('videoediting');
Route::get('/careers', [HomeController::class, 'career'])->name('career');
Route::get('/category/{category}', [HomeController::class, 'filterByCategory'])->name('blog.category');
Route::post('/admin/inquiry/store', [InquiryController::class, 'store'])->name('admin.inquiryStore');
Route::post('/admin/quotes/store', [InquiryController::class, 'storeQuote'])->name('admin.storeQuote');
Route::post('/admin/career/store', [InquiryController::class, 'storeCareer'])->name('admin.storeCareer');
// Route::post('/admin/career/store', [InquiryController::class, 'storeCareer'])->name('admin.storeCareer');
// Route to store the career all other path in middlware
Route::get('/admin/career/store', [InquiryController::class, 'indexCareer'])->name('admin.indexCareer');
Route::get('/admin/delete/{id}', [InquiryController::class, 'destroyCareer'])->name('admin.careerDelete');
// Route to store the comment
Route::post('comment/store', [CommentController::class, 'store'])->name('comments.store');

//-----------------------------------Admin Route---------------------------------------//
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AuthController::class, 'index'])->name('signIn');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('login');
    Route::get('/admin/register', [AuthController::class, 'register'])->name('register');
});
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // admin portfolio routes
    Route::get('admin/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio');
    // Route::get('admin/portfolio/filter', [PortfolioController::class, 'filter'])->name('admin.portfolio.filter');
    Route::post('admin/portfolio', [PortfolioController::class, 'store'])->name('admin.portfolioStore');
    Route::get('admin/portfolio/featured', [PortfolioController::class, 'portfolioFeatured'])->name('admin.portfolioFeatured');
    //---------New route added----------------//
    Route::get('/admin/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolioEdit');
    Route::put('/admin/portfolio/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolioUpdate');
    // -----New Route End----------//
    Route::delete('admin/portfolio/delete', [PortfolioController::class, 'destroy'])->name('admin.portfolioDestroy');
    Route::get('admin/portfolio/category', [PortfolioController::class, 'portfolioCategory'])->name('admin.portfolioCategory');
    Route::post('admin/portfolio/categoryStore', [PortfolioController::class, 'categoryStore'])->name('admin.categoryStore');
    Route::delete('admin/portfolio/categoryDelete', [PortfolioController::class, 'categoryDelete'])->name('admin.categoryDelete');
    Route::get('admin/portfolio/categoryedit/{id}', [PortfolioController::class, 'categoryEdit'])->name('admin.categoryEdit');
    Route::put('admin/portfolio/categoryUpdate/{id}', [PortfolioController::class, 'categoryUpdate'])->name('admin.categoryUpdate');
    // Feature Routes  //
    // Route::get('admin/portfolio/featured-manager', [PortfolioController::class, 'featuredManager'])->name('admin.featuredManager');
    // Route::post('admin/portfolio/featured-create', [PortfolioController::class, 'featuredCreate'])->name('admin.featuredCreate');
    // Route::delete('admin/portfolio/featured-delete', [PortfolioController::class, 'featuredDelete'])->name('admin.featuredDelete');
    // Feature Routes  //
    Route::get('admin/portfolio/feature_list', [FeatureController::class, 'index'])->name('admin.featuredList');
    Route::get('admin/portfolio/feature_create', [FeatureController::class, 'create'])->name('admin.featuredCreate');
    Route::post('admin/portfolio/feature_store', [FeatureController::class, 'store'])->name('admin.featureStore');
    Route::get('admin/portfolio/feature_edit/{id}', [FeatureController::class, 'edit'])->name('admin.featuredEdit');
    Route::post('admin/portfolio/feature_update/{id}', [FeatureController::class, 'update'])->name('admin.featureUpdate');
    Route::get('admin/portfolio/feature_delete/{id}', [FeatureController::class, 'destroy'])->name('admin.featureDelete');

    // plans route
    Route::get('/admin/plans', [PlansController::class, 'index'])->name('admin.plans');
    Route::post('/admin/plans/store', [PlansController::class, 'store'])->name('admin.plansStore');
    Route::delete('/admin/plans/destroy', [PlansController::class, 'destroy'])->name('admin.plansDestroy');
    Route::get('/admin/plans/features', [PlansController::class, 'indexFeatures'])->name('admin.indexFeatures');
    Route::post('/admin/plans/features/store', [PlansController::class, 'storeFeatures'])->name('admin.storeFeatures');
    Route::delete('/admin/plans/features/destroy', [PlansController::class, 'destroyFeatures'])->name('admin.destroyFeatures');
    // Blog route
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blog');
    Route::post('/admin/blogs/store', [BlogController::class, 'store'])->name('admin.blogStore');
    Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blogs/destroy', [BlogController::class, 'destroy'])->name('admin.blogDestroy');
    // Team route
    Route::get('/admin/teams', [TeamController::class, 'index'])->name('admin.team');
    Route::post('/admin/teams/store', [TeamController::class, 'store'])->name('admin.teamStore');
    Route::get('/admin/teams/edit/{id}', [TeamController::class, 'edit'])->name('admin.teamEdit');
    Route::put('/admin/team/update/{id}', [TeamController::class, 'update'])->name('admin.teamUpdate');
    Route::delete('/admin/teams/destroy', [TeamController::class, 'destroy'])->name('admin.teamDestroy');
    // Counter route
    Route::get('/admin/counter', [CounterController::class, 'index'])->name('admin.counter');
    Route::post('/admin/counter/store', [CounterController::class, 'store'])->name('admin.counterStore');
    Route::delete('/admin/counter/destroy', [CounterController::class, 'destroy'])->name('admin.counterDestroy');
    // Inquiry route
    // Inquiry Routes
    Route::get('/admin/inquiry', [InquiryController::class, 'index'])->name('admin.inquiry');
    // Route::post('/admin/inquiry/store', [InquiryController::class, 'store'])->name('admin.inquiryStore');
    Route::delete('/admin/inquiry/delete', [InquiryController::class, 'destroy'])->name('admin.inquiryDestroy');
    Route::get('/admin/inquiry/getMessage', [InquiryController::class, 'getMessage'])->name('admin.inquirygetMessage');
    // GetQuote route
    Route::get('/admin/quotes', [InquiryController::class, 'indexQuote'])->name('admin.indexQuote');
    Route::delete('/admin/quotes/destroy', [InquiryController::class, 'destroyQuote'])->name('admin.destroyQuote');
    // SEO route
    Route::get('/admin/seo', [SeoController::class, 'index'])->name('admin.indexSeo');
    Route::post('/admin/seo/store', [SeoController::class, 'store'])->name('admin.storeSeo');
    Route::get('/admin/seo/edit/{id}', [SeoController::class, 'edit'])->name('admin.editSeo');
    Route::post('/admin/seo/update/{id}', [SeoController::class, 'update'])->name('admin.updateSeo');
    Route::delete('/admin/seo/destroy', [SeoController::class, 'destroy'])->name('admin.destroySeo');
    // Comment route
    Route::get('admin/comment/', [CommentController::class, 'index'])->name('comments.list');
    Route::get('/admin/comment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    // Route::get('/admin/comment/getMessage', [CommentController::class, 'getMessage'])->name('comments.getMessage');
});

// cache clear and optimize
Route::get('/refresh', function () {
    // Artisan::call('optimize');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return back();
})->name('refresh');
