<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Think Digital Website Management System';

        // Fetch data from the Dashboard model
        $getClientblog = Dashboard::getClientblog();
        $getTotalInquiries = Dashboard::getTotalInquiries();
        $getTotalCarrier = Dashboard::getTotalCarrier();
        $getTotalGetquotes = Dashboard::getTotalGetquotes();
        
        // Pass data to the view
        return view('admin.pages.dashboard.index', compact(
            'pageTitle', 
            'getClientblog', 
            'getTotalInquiries', 
            'getTotalCarrier', 
            'getTotalGetquotes'
        ));
    }
}
