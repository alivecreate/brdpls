<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BusinessCategory;
use App\Models\Business;


class SocialShareController extends Controller
{
    public function whatsappShare(Request $request){
// dd($request->bid);
$bid =$request->query('bid');
        if($bid){
            $business= Business::find($bid);
        }
        return view('front.pages.social-share.index', compact('business'));
    }
}
