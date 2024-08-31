<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;


class GaneshFestivalController extends Controller
{
    public function index(){
        
        $groups = Group::orderBy('name', 'asc')->get();
        // dd($groups);

        return view('front.pages.groups.create', compact('groups'));
    }
}
