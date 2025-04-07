<?php

namespace App\Http\Controllers\Admin;

use App\Models\Career;
use App\Models\Inquiry;
use App\Models\Getquote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiry = Inquiry::orderBy('id', 'desc')->get();
        // Handle AJAX request
        if (request()->ajax()) {
            return view('admin.ajaxComponents.inquiry_table', compact('inquiry'))->render();
        }
        // Regular page load
        return view('admin.pages.inquiry.index', compact('inquiry'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|regex:/^\d{10}$/',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create the inquiry in the database
        Inquiry::create([
            'name' => $validated['name'],
            'phone_number' => $validated['number'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Return a JSON response for AJAX
        return response()->json([
            'status' => 'success',
            'message' => 'Inquiry submitted successfully!',
        ]);
    }




    public function destroy(Request $request)
    {
        $inquiry = Inquiry::find($request->id);
        if ($inquiry) {
            $inquiry->delete();
            return response()->json(['status' => 'success', 'message' => "Inquiry deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }

    // GetQuote methods
    // public function indexQuote()
    // {
    //     $quotes = Getquote::get();
    //     if (request()->ajax()) {
    //         return view('admin.ajaxComponents.quotes_table', compact('quotes'))->render();
    //     }
    //     return view('admin.pages.quoetes.index', compact('quotes'));
    // }

    public function indexQuote()
    {
        $quotes = Getquote::orderBy('id', 'desc')->get(); // Fetch the latest quotes
        if (request()->ajax()) {
            return view('admin.ajaxComponents.quotes_table', compact('quotes')); // Pass the quotes to the view
        }
        return view('admin.pages.quoetes.index', compact('quotes'));
    }


    public function storeQuote(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|regex:/^\d{10}$/',
            'message' => 'required',
        ]);
        $quotes = Getquote::create([
            'website_url' => $request->website_url,
            'company_name' => $request->company_name,
            'f_name' => $request->first_name,
            'l_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        if ($quotes) {
            return response()->json(['status' => 'success', 'message' => "Quotes Sent successfully"]);
        }
        return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
    }

    public function destroyQuote(Request $request)
    {
        $quotes = Getquote::destroy($request->id);

        if ($quotes) {
            return response()->json(['status' => 'success', 'message' => "Quote deleted successfully"]);
        }
        return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
    }


    // GET message of inquiry
    public function getMessage(Request $request)
    {
        if ($request->for === "inquiry") {
            $inquiry = Inquiry::orderBy('id', 'DESC')->findOrFail($request->id);
            $message = $inquiry->message;
            if ($inquiry) {
                return response()->json(['status' => 'success', 'message' => "", "inquiry_msg" => $message]);
            } else {
                return response()->json(['status' => 'error', 'message' => "something went wrong"]);
            }
        } else if ($request->for === "quotes") {
            $quotes = Getquote::orderBy('id', 'DESC')->findOrFail($request->id);
            $message = $quotes->message;
            if ($quotes) {
                return response()->json(['status' => 'success', 'message' => "", "inquiry_msg" => $message]);
            } else {
                return response()->json(['status' => 'error', 'message' => "something went wrong"]);
            }
        }
    }


    // Store Career
    public function storeCareer(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'resume' => 'required|file|mimes:pdf',
            'specialization' => 'required',
            'message' => 'required',
            'email' => 'required|email',
        ]);

        if ($validate) {
            $fileName = time() . '.' . $request->resume->extension();
            $file_path = base_path('uploads/career');
            $request->resume->move($file_path, $fileName);

            $career = Career::create([
                'f_name' => $request->first_name,
                'phone' => $request->phone,
                'l_name' => $request->last_name,
                'email' => $request->email,
                'specialization' => $request->specialization,
                'message' => $request->message,
                'file_path' => 'uploads/career/' . $fileName,
            ]);

            if ($career) {
                return response()->json(['status' => 'success', 'message' => "Sent successfully"]);
            } else {
                return response()->json(['status' => 'error', 'message' => "Something went wrong"]);
            }
        } else {
            return response()->json(['status' => 'error', 'message' => "Validation failed"]);
        }
    }

    // Display Career Data
    public function indexCareer()
    {
        $career = Career::orderBy('created_at', 'desc')->paginate(10); // Display 10 records per page
        if (request()->ajax()) {
            return view('admin.ajaxComponents.career_table', compact('career'))->render();
        }
        return view('admin.pages.career.index', compact('career'));
    }
     public function destroyCareer(string $id)
{
    $career = Career::findOrFail($id);

    // Delete the resume file if it exists
    if ($career->file_path && file_exists(base_path($career->file_path))) {
        unlink(base_path($career->file_path));
    }

    // Delete the career record
    $career->delete();

    // Redirect with a success message
    return redirect()->route('admin.indexCareer')->with('success', 'Career record and resume deleted successfully!');
}
    
}
