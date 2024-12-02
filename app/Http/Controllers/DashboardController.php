<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Business;
use App\Models\BusinessSocialLink;
use App\Models\ProductCategory;
use App\Models\Product;
use Str;

class DashboardController extends Controller
{
    
    public function index()
    {
        
        $businesses = Business::where('user_id', Auth::id())->where('status', '!=', 'deleted')->get();
        return view('front.pages.dashboard.index', compact('businesses'));
    }

}
