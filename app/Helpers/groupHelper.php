<?php
use App\Models\User;
use App\Models\Group;
use App\Models\GroupMember;



function checkIsGroupJoin($group_id){
    // dd('test');
    // dd(getUserData());
    $user_id = getUserData()['id'];

    $data = GroupMember::where(['group_id' => $group_id, 'user_id' => $user_id])->whereNot(['status' => 'active'])->first();
    if($data){
        return true;
    }
    return false;
}

function countGroupMembers($group_id){

    $data = GroupMember::where(['group_id' => $group_id, 'status' => 'active'])->count();
    if($data){
        return $data;
    }
    return $data;
}