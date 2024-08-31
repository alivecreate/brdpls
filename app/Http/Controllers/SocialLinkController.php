<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Social_Link;

class SocialLinkController extends Controller
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
        $social_links = Social_Link::orderBy('facebook', 'asc')->get();

        return view('front.widget.user-setting', compact('social_links'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());

         Social_Link::create([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'github' => $request->github,
            'status' => $request->status,
        ]);
    

        return redirect()->back()->with('success', 'Social-Links Added Successfully.');
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
        // dd($request->all());


        $social_links = Social_Link::find($id);
        // dd($social_links);

        if ($social_links) {
            $social_links->update([
               
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'github' => $request->github,
                'status' => $request->status,

            ]);
            
            return redirect()->back()->with('success', 'Social Links updated successfully');
            }
            else {
                Social_Link::create([
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
                    'youtube' => $request->youtube,
                    'github' => $request->github,
                    'user_id' => getUserData()['id'],
                    'status' => $request->status,
                ]);
            
                return redirect()->back()->with('success', 'Social Links updated successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
