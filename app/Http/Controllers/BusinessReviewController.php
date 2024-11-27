<?php

namespace App\Http\Controllers;

use App\Models\BusinessReview;
use App\Models\Business;

use Illuminate\Http\Request;
use Auth;
use URL;


class BusinessReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

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
        // dd(URL::previous());
        
        $review =  BusinessReview::create([
            'business_id' => $request->business_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'review' =>  $request->review,
    ]);

    $getBusiness = Business::find($request->business_id);
    // dd($getBusiness->slug);

        // dd($review);

        // return redirect()->back()->with('error', 'Your Review could not be updated.')->withInput()->withQueryString(['foo' => 'bar']);

        // {{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?review=true
        return redirect()->route('businessDetail', [
            'city' => $getBusiness->city,
            'slug' => $getBusiness->slug,
            'review' => 'true' // Add query parameter here
        ]);
        
        
        // return redirect()->back()->with('success', 'Your Review Updated.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessReview $businessReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessReview $businessReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessReview $businessReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, BusinessReview $businessReview)
    {
        // dd($request->input());

        $review = BusinessReview::findOrFail($request->id);

        // Perform the deletion
        $review->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Review deleted successfully.');

    }
}
