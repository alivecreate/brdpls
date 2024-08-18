<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Business;
use App\Models\BusinessSocialLink;

class MyBusinessController extends Controller
{
    public function index(){
        // dd(Auth::id());
        $businesses = Business::where('user_id', Auth::id())->get();
        return view('front.pages.my-business.index', compact('businesses'));

        return 'my business';
    }

    public function show($cid){
        
        
        $business = Business::where(['user_id' => Auth::id(), 'slug' => $cid])->where('status', '!=', 'deleted')
    ->with(['socialLinks', 'categories'])
    ->first();

    // CheckBusinessStatus($business->id, $business->user_id);
    

    if(!$business){
        return redirect(route('myBusiness'));
    }
    // dd($business->gallery);

    return view('front.pages.my-business.edit', compact('business'));

    }

    public function updateMyBusinessProfile(string $id, Request $request){
        // dd($request->all());

        $groups = Business::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
        ], 
        [
            'name.required' => 'Business Name is Required.',
        ]);


        $groups->update([
            'name' => $request->name,
            'description' => $request->description,
            'pincode' => $request->pincode,
            'building' => $request->building,
            'street' => $request->street,
            'landmark' => $request->landmark,
            'city' => $request->city,
            'state' => $request->state,
            'establishment_year' => $request->establishment_year,
            'status' => $request->status,
         ]);
         return redirect()->back()->with('success', 'Business Profile Updated');

    }

    
    public function updateMyBusinessSocialLinks(string $id, Request $request){
        // dd($request->all());

        $business = Business::where(['id' => $id, 'user_id' => Auth::id()])->first();


        $socialLink = BusinessSocialLink::updateOrCreate(
            [
                'business_id' => $business->id, 
            ], // Conditions to check for existing record

            [
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
            'pinterest' => $request->pinterest,
            ]
        );
         return redirect()->back()->with('success', 'Business Profile Updated');

    }

    public function updateMyBusinessContact(string $id, Request $request){
        // dd($request->all());

        $business = Business::where(['id' => $id, 'user_id' => Auth::id()])->first();

        if($business){
            // dd($business);
            $business->update([
                'title' => $request->title, 
                'contact_person' => $request->contact_person, 
                'phone1' => $request->phone1, 
                'phone2' => $request->phone2, 
                'whatsapp1' => $request->whatsapp1, 
                'whatsapp2' => $request->whatsapp2, 
                'email1' => $request->email1, 
                'email2' => $request->email2, 
                'status' => 1
             ]);
            }

         return redirect()->back()->with('success', 'Business Profile Updated');

    }

    public function deleteMyBusiness(Request $request, string $cid)
    {
        
// dd($id);

        $business = Business::where(['user_id' => Auth::id(), 'cid' => $cid])->first();
        // dd($business);

        if($business){
             $business->update([
            'status' => 'deleted',
            'deleted_at'  => now(),
        ]);
        return $business;
        return redirect()->back()->with('succcess', 'Group Successfully Deleted.');


        }else {
            return redirect()->back()->with('fail', 'Group Not Found.');
        }
    }


}
