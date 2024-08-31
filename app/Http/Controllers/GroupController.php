<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;    
use Intervention\Image\ImageManager;
use App\Models\Group;
use Auth;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // dd('tesst');
        
        $groups = Group::where(['status' => 'active'])->get();
        return view('front.pages.groups', compact('groups'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $groups = Group::orderBy('name', 'asc')->get();

        return view('front.pages.groups.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd(Auth::id());
        
        // $image_name = uploadImageThumb($request, 'cover');
        $slug = Str::slug($request->name);

        // $groupId = Str::random(15);
        // $groupId = generateRandomNumericString(10);
        // return response()->json(['group_id' => $groupId]);

        Group::create([
            'name' => $request->name,
            'user_id' => Auth::id(),
            'description' => $request->description,
            'category' => $request->category,
            'privacy' => $request->privacy,
            'members' => $request->members,
            'year' => $request->year,
            'location' => $request->location,
            'city' => $request->city,
            // 'cover' => $image_name,
            'slug' => $slug, 

            'status' => $request->status,
        ]);

        return redirect()->route('group.index')->with('success', 'New Group Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groups = Group::where(['status' => 'active'])->get();
        $deletedGroup = Group::where(['id' => $id, 'status' => 'deleted'])->first();
        if($deletedGroup){
            $name = $deletedGroup->group_name;
            $error = 'This Group Has Been Deleted.';
            $errorCode = 'bg-red-50';
            return view('front.pages.errors.group-error',compact('groups', 'name', 'error', 'errorCode' ));
        }

        $blockedGroup = Group::where(['id' => $id, 'status' => 'blocked'])->first();
        if($blockedGroup){
            $name = $blockedGroup->group_name;
            $error = 'This Group Has Been Blocked.';
            $errorCode = 'bg-blue-50';
            return view('front.pages.errors.group-error',compact('groups', 'name', 'error', 'errorCode' ));
        }
        
        
        $group = Group::where(['id' => $id, 'status' => 'active'])->first();

        if(!$group){
            return redirect(route('group.index'));
        }   

        $name = 'Group Report';
        $names = 'Post Report';
        return view('front.pages.group-detail',compact('group', 'name', 'names'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {

        $group = Group::where('group_code', $id)->first();
        // dd($group);

        if($group){
            return view('front.pages.groups.edit', compact('group'));
        }else{
            return redirect(route('group.index'))->with('fail', 'Groups Not Available...');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  dd($request->all());

         $groups = Group::findOrFail($id);

        //  if($request->file('image')){
        //      $image_name = uploadImageThumb($request);
        //  }
        //  else{
        //      $image_name = $testimonial->image;
        //  }
 
         $groups->update([
            'group_name' => $request->group_name,
            'description' => $request->description,
            'category' => $request->category,
            'privacy' => $request->privacy,
            'members' => $request->members,
            'year' => $request->year,
            'location' => $request->location,
            'city' => $request->city,
            // 'cover' => $image_name,
            'status' => $request->status,
         ]);

         return redirect()->route('groups.edit', ['groups' => $group->id])
             ->with('success', 'Groups updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // $groups = Group::find($id);
        // if (!$groups) {
        //     return redirect()->route('groups.index')->with('error', 'groups not found.');
        // }

        // $groups->delete();
        // deleteImages($groups->image);
        // return redirect()->route('groupDetail')->with('success', 'Group deleted successfully.');
        
        // dd(getUserData()['id']);
        $groups = Group::where(['id' => $request->group_id, 'user_id' => getUserData()['id']])->first();
        // dd($groups);
        if($groups){
             $groups->update([
            'status' => 'delete',
        ]);
        return redirect()->back()->with('succcess', 'Group Successfully Deleted.');


        }else {
            return redirect()->back()->with('fail', 'Group Not Found.');
        }
    }
}
