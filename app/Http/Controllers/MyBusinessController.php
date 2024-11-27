<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Business;
use App\Models\BusinessSocialLink;
use App\Models\ProductCategory;
use App\Models\Product;
use Str;


class MyBusinessController extends Controller
{
    public function index(){
        // dd(Auth::id());businesses
        // return 'my business';

        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        return view('front.pages.my-business.index', compact('businesses'));

    }

    public function show($slug){

        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();

    // CheckBusinessStatus($business->id, $business->user_id);
    

    if(!$myBusiness){
        return redirect(route('myBusiness'));
    }
    // dd($myBusiness->gallery);

    return view('front.pages.my-business.edit', compact('myBusiness', 'businesses'));

    }

    
    public function profile($slug){

        // dd($slug);

        // return $slug;
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $productCategories = ProductCategory::where('status', 'active')->get();
        
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();

        if(!$myBusiness){
            return redirect(route('myBusiness'));
        }
        
        $products = Product::where('business_id', $myBusiness->id)->get();
    

        return view('front.pages.my-business.profile', compact('myBusiness', 'businesses', 'productCategories', 'products'));
    }


    
    public function social($slug){

        // dd($slug);

        // return $slug;
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $productCategories = ProductCategory::where('status', 'active')->get();
        
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();
        
        $products = Product::where('business_id', $myBusiness->id)->get();
    
        if(!$myBusiness){
            return redirect(route('myBusiness'));
        }

        return view('front.pages.my-business.social', compact('myBusiness', 'businesses', 'productCategories', 'products'));
    }
    
    public function category($slug){

        // dd($slug);

        // return $slug;
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $productCategories = ProductCategory::where('status', 'active')->get();
        
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();
        $products = Product::where('business_id', $myBusiness->id)->get();
        if(!$myBusiness){
            return redirect(route('myBusiness'));
        }
        return view('front.pages.my-business.category', compact('myBusiness', 'businesses', 'productCategories', 'products'));
    }


    public function contact($slug){

        // dd($slug);

        // return $slug;
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $productCategories = ProductCategory::where('status', 'active')->get();
        
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();
        $products = Product::where('business_id', $myBusiness->id)->get();
        if(!$myBusiness){
            return redirect(route('myBusiness'));
        }
        return view('front.pages.my-business.contact', compact('myBusiness', 'businesses', 'productCategories', 'products'));
    }


    
    public function product($slug){

        // return $slug;
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        $productCategories = ProductCategory::where('status', 'active')->get();
        
        $myBusiness = Business::where(['user_id' => Auth::id(), 'slug' => $slug])->where('status', '!=', 'deleted')
        ->with(['socialLinks', 'categories'])
        ->first();
        
        $products = Product::where('business_id', $myBusiness->id)->get();


        // CheckBusinessStatus($business->id, $business->user_id);
    
        if(!$myBusiness){
            return redirect(route('myBusiness'));
        }

        return view('front.pages.my-business.product', compact('myBusiness', 'businesses', 'productCategories', 'products'));
    }

    public function productStore(string $id, Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
        ], 
        [
            'name.required' => 'Name is Required.',
            'price.required' => 'Product is Required.',
        ]);

        $checkBusinessOwner = Business::where('user_id', Auth::id())->first();
        
        if(!$checkBusinessOwner){
            return redirect()->back()->with('error', 'Something Went Wrong.');
        }

        // $checkProductCategory = ProductCategory::where('', $request->product_category);

        $category = ProductCategory::firstOrCreate(
            ['name' => $request->product_category], // Attributes to check
            [ 
                'slug' => $request->name,
            ]
        );

        // dd($category);
        
        $uploadedImages = $request->file('image');

        if($uploadedImages){
            foreach ($uploadedImages as $image) {
                // Call the upload helper for each image and store the returned ID
                $imageId = uploadCloudFlairImage($image);
                $imageIds[] = $imageId;            
                $image = implode(',', $imageIds);
            }
        }
        else{
            $image = null;
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            'items' => $request->items,
            'unit' => $request->unit,
            'slug' => Str::slug($request->name),
            'product_category_id' => $category->id,
            'business_id' => $request->business_id,
            'status' => 'active',
        ]);
    
        if($product){        
             return redirect()->back()->with('success', 'Product Added Successfully.');
        }
        return redirect()->back()->with('error', 'Something Went Wrong.');
}

public function productDelete($id){
    
    $checkBusinessOwner = Business::where('user_id', Auth::id())->first();
    
    if(!$checkBusinessOwner){
        return redirect()->back()->with('error', 'Something Went Wrong.');
    }
    // dd($checkBusinessOwner->name);

    $product = Product::where(['id' => $id])->first();
    // dd($product);
    
    $checkBusinessOwner = Business::where(['id' => $product->business_id, 'user_id' => Auth::id()])->first();
    
    
    // dd($checkBusinessOwner);
    if ($product && $checkBusinessOwner) {
        $product->delete(); // This will soft delete the product
        return redirect()->back()->with('success', 'Product deleted successfully.');
    
    }
    return redirect()->back()->with('error', 'Something went wrong, Please try again.');

}


public function productUpdate(string $id, Request $request){
    
    // dd($request->items);

    $checkBusinessOwner = Business::where('user_id', Auth::id())->first();
    
    if(!$checkBusinessOwner){
        return redirect()->back()->with('error', 'Something Went Wrong.');
    }
    // dd($checkBusinessOwner->name);

    $product = Product::find($id);
    // dd($product);
    
    $checkBusinessOwner = Business::where(['id' => $product->business_id, 'user_id' => Auth::id()])->first();
    
    // dd($product);
    if ($product && $checkBusinessOwner) {

        $category = ProductCategory::firstOrCreate(
            ['name' => $request->product_category], // Attributes to check
            [ 
                'slug' => $request->name,
            ]
        );

        $checkUpdated = $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'items' => $request->items,
            'unit' => $request->unit,
            'product_category_id' => $category->id,
        ]);

        if($checkUpdated){
            return redirect()->back()->with('success', 'Product Updated Successfully.');
        }
    }
    return redirect()->back()->with('error', 'Something went wrong, Please try again.');

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
            'gst' => $request->gst,
            
            'establishment_year' => $request->establishment_year,
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

        $request->validate([
            'phone1' => 'required|string',
        ], 
        [
            'phone1.required' => 'Primary Phone Number is Required.',
        ]);

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
                'website' => $request->website, 
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
