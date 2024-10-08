<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GaneshCompetition;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\GroupPost;
use Auth;

class GaneshFestivalGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $groups = Group::orderBy('id', 'desc')->get();
        return view('front.pages.groups.list', compact('groups'));
    }


    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $homeGaneshCompetition = GaneshCompetition::where(['participant_id' => Auth::id(), 'competition_type' => 3])->first();
        $homeGaneshCompetitionLists = GaneshCompetition::where(['competition_type' => 3, 'participant_id' => Auth::id(), 'status' => 'active'])->orderBy('id', 'desc')->get();

        if($homeGaneshCompetition){
            $user = User::find(Auth::id());
            return view('front.pages.ganesh.competition.payment-competed-home', compact('user', 'homeGaneshCompetition', 'homeGaneshCompetitionLists'));
        }
        
        if(!Auth::check()){
            return redirect('registration')->with('error', 'Please Create User Account First.');
        }

        $group = Group::where(['user_id' => Auth::id()])->first();
        $groups = Group::where('status', 'active')->orderBy('id', 'desc')->limit(5)->get();

        
        if($group){
            $competition = GaneshCompetition::where(['participant_id' => $group->id])->first();
            return view('front.pages.groups.group-exists', compact('group', 'competition', 'groups'));
            // dd($group);
        }

        return view('front.pages.ganesh.group.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $group = Group::where([
            'user_id' => Auth::id(),
        ])->first();
        
        // dd($group);
        
        if($group){
            return redirect()->back()->with('success', 'Group already registered with your account.');
        }
        
        
        $request->validate([
            'name' => 'required|string',
            'decoration' => 'required|string',
            'address' => 'required|string',
            'cover' => 'required|image|max:60480', // Max size 2MB
        ]);

        $image = $request->file('cover');
        $imageId = uploadCloudImage($image);

    // dd( $imageId);
            if($imageId){
                $cover = $imageId;
            }else{
                $cover = null;
            }

        $cid = Str::lower(Str::random(12));        
        // BusinessTiming::updateOrCreate(
        $group = Group::updateOrCreate([
            'cid' => $cid,
            'name' => $request->name,
            'user_id' => Auth::id(),
            'decoration' => $request->decoration,
            'category' => 'ganesh-festival',
            'privacy' => 'public',
            'cover' => $cover,
            'address' => $request->address,
            'city' => $request->city,
            'year' => $request->year,
            'status' => 'active',
        ]);
        // $group

        return redirect()->route('ganeshFestivalGroup.show', $group->slug)->with('success', 'Ganesh Festival Group Created.');
             
        // return redirect()->route('ganeshCompetitionPaymentCreate',['type' => 'group'])->with('success', 'Ganesh Festival Group Created.');
        

        $slug = Str::slug($request->name);
    }

   

    public function groupUploadPhotos(Request $request){
        // dd('test');
        $cid = $request->query('cid');
        // dd(getStates());
        $group = Group::where('cid', $cid)->first();
        if(!$group){
            return redirect(route('businessList'));
    }        
        return view('front.pages.ganesh.group.upload-photos', compact('group', 'cid'));
    }

    public function uploadGaneshGroupCover(Request $request){

        
      
    $request->validate([
        'cover' => 'required|image|max:20480', // Max size 2MB
    ]);
    $image = $request->file('cover');
    $imageId = uploadCloudImage($image);

        if($imageId){
            $business = Group::where(['cid' =>$request->cid])->first();
            // dd($business);
            $business->update([
                'cover' => $imageId,
            ]);
            
            return redirect()->back()->with('success', 'Cover Photo Updated.');
        }
        else{
            // dd('else');
            return redirect()->back()->with('error', 'Someting Went Wrong. Please Try Again');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        // dd($id);


        $user = User::find(Auth::id());
        
        $selectedYear = request()->query('year');
        
        $group = Group::where('slug', $slug)->first();

        if(!$group){
            return redirect('ganesh-festival');
        }
        

        $years = GroupPost::selectRaw('year') // Assuming the date field is 'created_at'
        ->distinct()    
        ->where(['group_id' => $group->id])                
        ->orderBy('year', 'desc')              
        ->pluck('year');

        if($selectedYear !== null){
            
            $groupPosts = GroupPost::where(['group_id' => $group->id, 'year' => $selectedYear])->orderBy('id', 'desc')->get();
        }
        else{
            $groupPosts = GroupPost::where(['group_id' => $group->id])->orderBy('id', 'desc')->get();
        }

        return view('front.pages.ganesh.group.show', compact('group','groupPosts', 'user', 'selectedYear', 'years'));

    }

    public function showHome(string $id)
    {
        // dd('test');

        $group = Group::where('slug', $id)->first();

        $user = User::find(Auth::id());
        
        if($group){
            $groupPosts = GroupPost::where('group_id', $group->id)->orderBy('id', 'desc')->get();
            
            // dd($groupPosts);

            return view('front.pages.ganesh.group.show', compact('group','groupPosts', 'user'));
        }

        return redirect('ganesh-festival');
    }

    
    public function ganeshFestivalMyGroup()
    {
        // dd('test ganesh');
        $groups = Group::where('status', 'active')->get();
        $myGroup = Group::where('user_id', Auth::id())->first();
        
        if($myGroup){
            if($groups){
                return view('front.pages.ganesh.group.my-group', compact('groups', 'myGroup'));
            }
        }
        
        return redirect()->route('ganeshFestivalGroup.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cid)
    {
        $delete = Group::where(['cid' => $cid, 'user_id' => Auth::id()])->first();
        // dd( $delete);
        if($delete){
            $delete->delete();
            return redirect()->back()->with('success', 'Group Deleted Successfully.');
        }
        return redirect()->back()->with('error', 'Something went wrong, please try again.');
    }

    public function deletePost(string $cid)
    {
        $delete = Group::where(['cid' => $cid, 'user_id' => Auth::id()])->first();
        // dd( $delete);
        if($delete){
            $delete->delete();
            return redirect()->back()->with('success', 'Group Deleted Successfully.');
        }
        return redirect()->back()->with('error', 'Something went wrong, please try again.');
    }

    
    public function updateGroupCoverPic(Request $request){
        try {
            $user = User::find(Auth::id());
            $group = Group::find($request->group_id);  
            // dd($group);

            $cover = $request->file('image');
            
            if ($cover) {
                $coverId = uploadCloudImage($cover);
                
                if ($coverId) {
                    $cover = $coverId;
                } else {
                    $cover = null;
                }
                
                $group->update([
                    'cover' => $cover,
                ]);
                
                return redirect()->back()->with('success', 'Cover Picture Updated.');
            }
            else{
                return redirect()->back()->with('success', 'Cover Picture Updated.');
            }
        } catch (\Exception $e) {
            // Handle the exception and log the error if needed
            \Log::error('Error updating profile picture: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update profile picture. Please try again.');
        }
    }

    
    public function updateHomeGaneshCoverPic(Request $request){
        try {

            $user = User::find(Auth::id());
            $competition = GaneshCompetition::where('id', $request->id);

            // dd($request->all());


            $cover = $request->file('image');
            // dd($cover);
            
            if ($cover) {
                $user = uploadCloudImage($cover);
                
                if ($user) {
                    $cover = $user;
                } else {
                    $cover = null;
                }
                
                $competition->update([
                    'image' => $cover,
                ]);
                
                return redirect()->back()->with('success', 'Cover Picture Updated.');
            }
            else{
                return redirect()->back()->with('success', 'Cover Picture Updated.');
            }
        } catch (\Exception $e) {
            // Handle the exception and log the error if needed
            \Log::error('Error updating profile picture: ' . $e->getMessage());
            // return $e;
            return redirect()->back()->with('error', 'Failed to update profile picture. Please try again.');
        }
    }



}
