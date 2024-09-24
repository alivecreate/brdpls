<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GroupPost;
use Auth;

class GaneshFestivalController extends Controller
{
    public function index(){
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

        
        $groups = Group::orderBy('name', 'asc')->limit(6)->get();
        // dd($groups);

        return view('front.pages.groups.create', compact('groups'));
    }

    public function ganeshFestivalPhotos($slug){
        
        // dd($slug);
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

        // dd($years);

        
        if($selectedYear !== null){
            $groupPhotos = GroupPost::where(['group_id' => $group->id, 'year' => $selectedYear])
            ->whereNotNull('image')->get();
        }
        else{
            $groupPhotos = GroupPost::where(['group_id' => $group->id])    
            ->whereNotNull('image')->get();
        }

        // dd($groupPhotos);

        $groups = Group::orderBy('name', 'asc')->limit(6)->get();
        // dd($groups);

        return view('front.pages.ganesh.group.show-photos', compact('groups', 'group', 'groupPhotos', 'selectedYear', 'years'));
    }

    public function ganeshFestivalVideos($slug){
        
        // dd($slug);
        
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


        // dd($years);

        if($selectedYear !== null){
            $groupVideos = GroupPost::where(['group_id' => $group->id, 'year' => $selectedYear])
            ->whereNotNull('video')->get();
        }
        else{
            $groupVideos = GroupPost::where(['group_id' => $group->id])    
            ->whereNotNull('video')->get();
        }
        // dd($groupVideos);

        $groups = Group::orderBy('name', 'asc')->limit(6)->get();
        // dd($groups);

        return view('front.pages.ganesh.group.show-videos', compact('groups', 'group', 'groupVideos', 'selectedYear', 'years'));
    }

    
    public function ganeshFestivalSettings($slug){
        
        // dd($slug);

        $selectedYear = request()->query('year');

        $group = Group::where('slug', $slug)->first();

        // dd( $group->user_id, Auth::id());

       
        
        $myGroup = Group::where('user_id', Auth::id())->first();

        if(!$group && !$myGroup){  
            return redirect('ganesh-festival');
        }

        if($group->user_id != Auth::id()){  
            return redirect('ganesh-festival');
        }
        


        $groups = Group::orderBy('name', 'asc')->limit(6)->get();
        // dd($groups);

        return view('front.pages.ganesh.group.group-setting', compact('groups', 'group'));
    }
}
