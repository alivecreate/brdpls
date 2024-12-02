<?php

namespace App\Http\Controllers;

use App\Models\BusinessInquiry;
use App\Models\Business;
use Illuminate\Http\Request;
use Auth;

class BusinessInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd('test');

$user = auth()->user(); // Get the currently logged-in user

$businessIds = $user->businesses()->pluck('id'); // Get IDs of businesses owned by the user

// Get inquiries for these businesses with pagination
$inquiries = \App\Models\BusinessInquiry::whereIn('business_id', $businessIds)
    ->with('business:id,name') // Load related business data, selecting only the id and name
    ->orderBy('created_at', 'desc')
    ->paginate(10); // Paginate the results with 20 per page


// return $inquiries;

$businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        return view('front.pages.my-business.inquiry', compact('inquiries', 'businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->input());
        
        $review =  BusinessInquiry::create([
            'business_id' => $request->business_id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'phone' =>  $request->phone,
            'title' =>  $request->title,
            'message' =>  $request->message,
    ]);

    $getBusiness = Business::find($request->business_id);
    // dd($getBusiness->slug);

        // dd($review);

        // return redirect()->back()->with('error', 'Your Review could not be updated.')->withInput()->withQueryString(['foo' => 'bar']);

        // {{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?review=true
        return redirect()->back()->with('success', 'Your Inqury Has Been Sent.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessInquiry $businessInquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessInquiry $businessInquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessInquiry $businessInquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    
        $user = auth()->user(); // Get the logged-in user

    // Check if the inquiry belongs to one of the user's businesses
    $inquiry = BusinessInquiry::whereHas('business', function ($query) use ($user) {
        $query->whereIn('id', $user->businesses()->pluck('id'));
    })->find($id);

    if (!$inquiry) {
        return redirect()->back()->with('error', 'Something went wrong, Please try again.');
    }

    $inquiry->delete();
    return redirect()->back()->with('success', 'Inquiry deleted successfully.');

    
    }


public function updateInquiryStatus(Request $request)
{
    // dd( $request->all());


    // Validate the incoming request
    $request->validate([
        'status' => 'required|string|in:new,assigned,in_progress,follow_up,on_hold,closed,rejected,cancelled,completed' // Define allowed statuses
    ]);

    $user = auth()->user(); // Get the logged-in user

    // Find the inquiry and check if it belongs to the user's business
    
    $inquiry = BusinessInquiry::where('id', $request->id)->first();

    
    if ($inquiry) {
        
        $inquiry->update([
            'status' => $request->status
        ]);

        return response()->json(['success' => true, 'message' => 'status updated.'], 200);
    } else {
        // Handle the case where the business was not found
        return response()->json(['success' => false, 'message' => 'something went wrong.'], 404);
    }

}

}
