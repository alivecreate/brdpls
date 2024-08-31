<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GroupMember;
use App\Models\User;
use App\Models\Group;
use Auth;
class GroupMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd(Auth::id());
        

        
        $groupMember = GroupMember::where(
            ['group_id' => $request->group_id, 'user_id' => getUserData()['id']],
            ['status' => 'active']
        )->first();

        if($groupMember){
            $groupMember->delete();
            return redirect()->back()->with('success', 'Unfollowed this page.');
        }

            // Assuming you have a group and a user already created

            $group = Group::find($request->group_id);

            $groupMember = GroupMember::updateOrCreate(
                ['group_id' => $request->group_id, 'user_id' => getUserData()['id']],
                ['status' => 'active']
            );


            return redirect()->back()->with('success', 'Successfully Followed.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
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
        $groupMember = GroupMember::where(['group_id' => $request->group_id, 'user_id' => getUserData()['id']])->first();
        // dd($groupMember->id);
        if($groupMember){
             $groupMember->update([
            'status' => 'left'
        ]);
        return redirect()->back()->with('succcess', 'Group Successfully Left.');


        }else {
            return redirect()->back()->with('fail', 'Group Not Found.');
        }

         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
            $userId = getUserData()['id'];

            // Find the group member
            $groupMembers = GroupMember::where('id', $groupMembers)->where('user_id', $userId)->first();

            if (!$groupMembers) {
                return redirect()->back()->with('error', 'User is not a member of this group.');
            }

            // Delete the group member
            $groupMembers->delete();

        return redirect()->back()->with('success', 'Successfully left the group.');
    }
}
