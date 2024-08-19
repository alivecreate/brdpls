<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BusinessCategory;
use App\Models\Business;


class SocialShareController extends Controller
{
    public function whatsappShare(Request $request){
// dd($request->bid);
$bid =$request->query(1);
// dd($bid);

        if($bid){
            $business= Business::find($bid);
        }
        $business= Business::find(1);
        return view('front.pages.social-share.index', compact('business'));
    }
}
