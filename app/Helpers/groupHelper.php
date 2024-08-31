<?php
use App\Models\User;
use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Support\Facades\Auth;





function checkIsGroupJoin($group_id){
    // dd($group_id);
    // dd(getUserData());
    if(Auth::check()){

        $user_id = Auth::id();
        $data = GroupMember::where(['group_id' => $group_id, 'user_id' => $user_id])->first(); 
        // dd($user_id);
        if($data){
            return true;
        }
        return false;
    }
}

function countGroupMembers($group_id){

    $data = GroupMember::where(['group_id' => $group_id, 'status' => 'active'])->count();
    if($data){
        return $data;
    }
    return $data;
}