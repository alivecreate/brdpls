<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Business;
use App\Models\BusinessReview;

use App\Models\BusinessTiming;
use App\Models\BusinessCategory;
use App\Models\City;
use App\Models\Product;

use Auth;


use Carbon\Carbon;


class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business = Business::all();
        return view('front.pages.business.index', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $business = Business::orderBy('asc')->get();
        return view('front.pages.business.create', compact('business'));
    }

    public function businessList(Request $request)
    {
        // dd(getStates());

        $cid = $request->query('cid');
        // dd(getStates());
        $business = Business::where('cid', $cid)->first();

        if($business){
            return view('front.pages.business.business-list', compact('business', 'cid'));
        }        

        return view('front.pages.business.business-list');
    }

    
    public function businessDetail($city, $slug, Request $request)
    {
        // dd('tesst');
        // dd($city ,$slug);
        // dd($slug);

        // dd($product);
        
        $businessDetail = Business::where(['slug' => $slug, 'status' => 'active'])->first();
        
        $checkCity = City::where(['name' => $city])->first();
        
        // dd($businessDetail);

        if($checkCity == null && $businessDetail == null ){
            return redirect()->route('index')->with("Page link doesn't exist");
            $businessExperience = Carbon::now()->year - $businessDetail->establishment_year;
        }
        elseif(!$city == null && $businessDetail == null ){
            return redirect(route('index') . '/vadodara')->with("error", "Page link doesn't exist");
            // return redirect()->route('index') . '/vadodara')->with("Page link doesn't exist");
        }

        if(!$businessDetail->establishment_year == null){
            $businessExperience = Carbon::now()->year - $businessDetail->establishment_year;
        }
        else{
            $businessExperience = null;
        }

        $p = $request->query('p');
        $review = $request->query('review');
        $productDetail = Product::where(['slug' => $p, 'business_id'=> $businessDetail->id])->first();

        $products = Product::where(['business_id'=> $businessDetail->id, 'status' => 'active'])->orderBy('id', 'desc')
        ->paginate(8)
        ->appends(['p' => 'true']);;
        

        $reviews = BusinessReview::where(['business_id'=> $businessDetail->id])->orderBy('id', 'desc')
        ->paginate(6)
        ->appends(['review' => 'true']);;
        

        $businessOwner = Business::where(['slug' => $slug, 'user_id' => Auth::id()])->first();

        // dd($businessOwner);
        
        if($p == 'true'){
            // dd('test');
            return view('front.pages.business.business-detail-product', compact('businessDetail', 'businessExperience', 'businessOwner', 'products'));
        }
        elseif($productDetail){
            // dd($productDetail);
            return view('front.pages.business.business-detail-product-detail', compact('businessDetail', 'businessExperience', 'businessOwner', 'productDetail'));
        }  
        elseif($review == 'true'){
            // dd('all review');
            $totalRating = $productDetail;
            // dd($businessDetail->reviews);
            return view('front.pages.business.business-detail-review', compact('businessDetail', 'reviews', 'businessExperience', 'businessOwner', 'products'));
        }

        if(!$productDetail && $p){
            return redirect()->route('businessDetail', ['city' => $city, 'slug' => $slug]);
        }
    

        return view('front.pages.business.business-detail', compact('businessDetail', 'businessExperience', 'businessOwner'));

        // dd($businessDetail);
    }

 

    public function step2ContactDetail(Request $request)
    {
        $cid = $request->query('cid');
        // dd(getStates());
        $business = Business::where('cid', $cid)->first();
        if(!$business){
            return redirect(route('businessList'));
    }        
        return view('front.pages.business.create-contact-detail', compact('business', 'cid'));
    }

    public function storeStep2ContactDetail(Request $request)
    {

        // dd($request->all());
        $business = Business::where('cid', $request->cid)->first();
        

        if($business){
            // dd($business);
            $business->update([
                'name_prefix' => $request->name_prefix, 
                'contact_person' => $request->contact_person, 
                'phone1' => $request->phone1, 
                'phone2' => $request->phone2, 
                'whatsapp1' => $request->whatsapp1, 
                'whatsapp2' => $request->whatsapp2, 
                'email1' => $request->email1, 
                'email2' => $request->email2, 
                'status' => 1
             ]);
        return redirect()->route('step3BusinessTimining', ['cid' => $request->cid])->with('success', 'Business Contact Detail Saved.');
            //  return redirect(route('step3BusinessTimining', ['cid', $request->cid]));
    }        

    return view('front.pages.business.business-list', compact('business'));

    // dd($request->all());

    }


    
    public function businessListContactDetail()
    {
        // dd(getStates());
        $business = Business::orderBy('first_name', 'asc')->get();
        return view('front.pages.business.business-list', compact('business'));
    }


    public function step3BusinessTimining(Request $request)
    {
        // dd(getStates());
        $business = Business::where('cid', $request->cid)->first();
        $cid = $request->query('cid');
        // dd($business);
        return view('front.pages.business.step3-timing', compact('business', 'cid'));
    }


    public function step4BusinessCategory(Request $request)
    {
        
        $business = Business::where('cid', $request->cid)->first();
// dd($business->categoryIds());
        if ($business) {
            $selectedCategories = $business->categories; // This will give you a collection of categories associated with the business
            // return $categories;
            $selectedCategoryIds = $business->categoryIds();
        }
        else{
        $selectedCategories = null;
        }
        


        $cid = $request->query('cid');
        // dd($business);
        return view('front.pages.business.step4-category', compact('business', 'cid', 'selectedCategories', 'selectedCategoryIds'));
    }

    public function storeStep4BusinessCategory(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'selected_item' => 'required|string', // Ensures at least one item is selected
        ], [
            'selected_item.required' => 'You must select at least one category.',
        ]);

        $business = Business::where('cid', $request->cid)->first();
        // dd($business->id);

        $categories = explode(',', $request->input('selected_item'));

        // updated

        $updatedCategories = explode(',', $request->input('selected_item'));

        // Get all current categories associated with the business
        $currentCategories = $business->categories()->pluck('category_id')->toArray();
    


        // Find categories to delete
        $categoriesToDelete = array_diff($currentCategories, $updatedCategories);
        
        // dd($categoriesToDelete);
        BusinessCategory::where('business_id', $business->id)
        ->whereIn('category_id', $categoriesToDelete)
        ->delete();


        foreach ($categories as $category_id) {
            BusinessCategory::firstOrCreate([
                'business_id' => $business->id,
                'category_id' => $category_id,
            ]);
        }
        
        return redirect()->route('myBusiness.show', $business->slug)->with('success', 'Business Created Successfully.');

    }

    public function storeBusinessTimining(Request $request)
    {
            $businessHours = $request->input('business_hours');

            foreach ($businessHours as $day => $times) {
                
            $openTime = $times['open'];
            $closeTime = $times['close'];

                BusinessTiming::updateOrCreate(
                    [
                        'business_id' => 1,
                        'day' => $day
                    ],
                    [
                        'open_time' => $times['open'] === 'Closed' ? 'Closed' : $times['open'],
                        'close_time' => $times['close'] === '-' ? null : $times['close'],
                    ]
                );
            }
    
        return redirect()->route('step4BusinessCategory', ['cid' => $request->cid])->with('success', 'Business Contact Detail Saved.');
        
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $checkCid = Business::where(['cid' => $request->cid, 'user_id' => Auth::id()])->first();
        // dd($checkCid);

        if($checkCid){
            
            $updateBusiness = $checkCid->update([
                'name' => $request->name,
                'description' => $request->description,
                'business_type' => $request->business_type,
                
                'building' => $request->building,
                'street' => $request->street,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'establishment_year' => $request->establishment_year,
                'user_id' => Auth::id(),
                'status' => 'active',
            ]);
            if($updateBusiness){
                return redirect()->route('step2ContactDetail', ['cid' => $request->cid])->with('success', 'Business Detail Updated.');
            }
            return redirect()->back()->with('success', 'Something went wrong.');
        }

        $cid = Str::lower(Str::random(12));
        
        // BusinessTiming::updateOrCreate(
        $business = Business::updateOrCreate([
            'cid' => $cid,
            'name' => $request->name,
            'description' => $request->description,
            'business_type' => $request->business_type,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'whatsapp1' => $request->whatsapp1,
            'whatsapp2' => $request->whatsapp2,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'building' => $request->building,
            'street' => $request->street,
            'landmark' => $request->landmark,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'country' => $request->country,
            'establishment_year' => $request->establishment_year,
            'user_id' => Auth::id(),
            'status' => 'active',
        ]);
        // return $business;
        
        return redirect()->route('step2ContactDetail', ['cid' => $cid])->with('success', 'New Business Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        // dd($request->all());
        

        $business = Business::find($id);
        // dd($business);
        if($business){
            return view('front.pages.business.edit', compact('business'));
        }else{
            return redirect(route('business.index'))->with('fail', 'Business Not Available...');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $business = Business::findOrFail($id);
 
         $business->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'business_name' => $request->business_name,
            'description' => $request->description,
            'business_type' => $request->business_type,
            'other_type' => $request->other_type,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'establishment_year' => $request->establishment_year,
            'status' => $request->status,
         ]);

         return redirect()->route('business.edit', ['business' => $business->id])
             ->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
