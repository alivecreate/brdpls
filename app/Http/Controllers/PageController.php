<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Social_Link;
use App\Models\Group;
use App\Models\User;

use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use Auth;

class PageController extends Controller
{
    public function theme(){
        
        return view('front.pages.index');
        // return view('front.pages.theme');
    }

    public function index(){

        // dd(getUserData());
        
        $groups = Group::orderBy('id', 'desc')->get();
        // dd($groups);
        return view('front.pages.groups.list', compact('groups'));

        // $groups = Group::get();
        // return view('front.pages.landing-page', compact('groups')); 
        // return view('front.pages.index');
    }

    
    public function about(){
        return view('front.pages.about');
    }

    public function termsAndConditions(){
        return view('front.pages.terms-and-conditions');
    }

    public function privacyPolicy(){
        return view('front.pages.privacy-policy');
    }

    public function refundAndCancellation(){
        return view('front.pages.refund-and-cancellation');
    }

    public function contact(){
        return view('front.pages.contact');
    }

    public function messages(){
        
        return view('front.pages.messages');
    }

    public function video(){
        
        return view('front.pages.video');
    }

    public function videoWatch(){
        
        return view('front.pages.video-watch');
    }

    public function event(){
        
        return view('front.pages.event');
    }

    public function event2(){
        
        return view('front.pages.event-2');
    }

    public function pages(){
        
        return view('front.pages.pages');
    }

    public function timelinePage(){
        
        return view('front.pages.timeline-page');
    }

    public function groups(){
        $groups = Group::get();
        return view('front.pages.groups', compact('groups'));   
    }


    public function groupDetail($id){
        // dd($id);
        $group = Group::where('id', $id)->first();
        if(!$group){
            return redirect(route('group.index'));
        }     
        $name = 'Group Report';
        $names = 'Post Report';
        return view('front.pages.group-detail',compact('group', 'name', 'names'));
    }

    public function timeline(){
        
        return view('front.pages.timeline');
    }

    public function timelineEvent(){
        
        return view('front.pages.timeline-event');
    }


    public function timelineFunding(){
        
        return view('front.pages.timeline-funding');
    }


    public function groups2(){
        
        return view('front.pages.groups-2');
    }

    public function groupForm(){
        
        return view('front.pages.group-form');
    }

    public function groupformEdit(){
        
        return view('front.pages.group-form-edit');
    }

    public function product(){

        return view('front.pages.products');
    }


    public function product1(){

        return view('front.pages.product-view-1');
    }

    public function product2(){

        return view('front.pages.product-view-2');
    }

    public function home(){

        return view('front.pages.business.home');
    }

    public function blog(){

        return view('front.pages.blog');
    }

    public function blog2(){

        return view('front.pages.blog-2');
    }

    public function blogRead(){

        return view('front.pages.blog-read');
    }

    public function games(){

        return view('front.pages.games');
    }

    public function funding(){

        return view('front.pages.funding');
    }

    public function setting(){

        $social_links = Social_Link::where('user_id', getUserData()['id'])->first();
        
        // dd($social_links);
        return view('front.pages.setting', compact('social_links'));
    }

    public function upgrade(){

        return view('front.pages.upgrade');
    }

    public function login(){
        // dd('test');
        
             // Set a cookie using the Cookie facade
            //  Cookie::queue(Cookie::make('authuser', 'value', 60 * 24 * 365)); // 1 year
        
             // Alternatively, set a cookie using the response helper
            //  return response('Cookie has been set')->cookie('authuser', '515a1sdakdsa', 60 * 24 * 365); // 1 year
       
        return view('front.pages.form-login');
    }

    public function registration(Request $request){

        $cookieValue = Cookie::get('authuser');
        return view('front.pages.form-registration');
    }

    
    public function userVerification(Request $request){

        $cid = $request->query('cid');
        $page = $request->query('page');
        

        $user = User::where(['cid' => $cid])->first();

        // dd($user);

        if(!$user){
        return redirect(route('login'));
    }
        elseif($user->status == 'active'){
            return redirect(route('login'));
        }

        elseif($user->status != 'active'){
            return view('front.pages.register-verify', compact('user'));
        }
        else{
                    // dd('reg');       
            return redirect(route('registration'));
        }

        $cookieValue = Cookie::get('authuser');
        return view('front.pages.form-register');
    }

    public function forgotPW(Request $request){
        return view('front.pages.forgot-pw');
    }

    
    public function checkUserVerification(Request $request){

        // dd($request->all());
        // $cid = $request->query('cid');
        // $otp = $request->query('otp');
        

        $checkotp = User::where(['cid' => $request->cid, 'otp' => $request->otp])->first(); 

        $user = User::where('cid', $request->cid)->first();
        // return true;
        // return true;

    
        if($checkotp){
            // return 'verified';
            
            $checkotp->update([
                'status' => 'active',
                'phone_verified_at' => now()
            ]);
            return redirect()->route('index')->with('success', 'Account Verified Successfully.');

            return redirect(route('index'));
        }
        // return 'not verified';
        // return redirect9

        return redirect()->route('userVerification', ['cid' => $request->cid])->with('error', 'OTP does not matched.');


            return view('front.pages.register-verify', compact('user'));    
        

        $cookieValue = Cookie::get('authuser');
        return view('front.pages.form-register');
    }

    public function components(){
        return view('front.pages.components');
    }

    public function businessForm(){
        
        return view('front.pages.business.business-form');
    }
}


