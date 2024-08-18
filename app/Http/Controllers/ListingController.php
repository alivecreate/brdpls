<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BusinessCategory;
use App\Models\Business;



class ListingController extends Controller
{
    public function listing($slug){

        $searchName = 'Barodian Cab'; // The business name to search for
       
        
$businesses = Business::whereHas('categories', function ($query) use ($slug) {
    $query->where('name', 'like', '%' . $slug . '%');
})->distinct()->with(
    [
    'categoryNames', 
     'gallery' => function ($query) {
        $query->limit(5); // Limit the number of images to 10
    }
    ])->get();


return view('front.pages.listing.index', compact('businesses', 'slug'));


        // dd($businesses);

        $categories = BusinessCategory::where('name', 'like', '%' . $slug . '%')->get();

$businessNames = collect(); // Initialize an empty collection
// dd($categories);

foreach ($categories as $category) {
    $businesses = $businessNames->merge($category->businesses()->distinct()->pluck('name'));
    // $businessNames = $category->businesses()->distinct()->pluck('name');
}


dd($businessNames);


        // $category = Category::where('name', 'like',  '%' . $slug . '%')->get();
        $category = Category::where('name', 'like', '%' . $slug . '%')->first();
        return $category;


if ($category) {
    $businessNames = $category->businesses()->pluck('name');
}


        return $businessNames;
    }
}
