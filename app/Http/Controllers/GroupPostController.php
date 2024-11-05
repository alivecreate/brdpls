<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GroupPost;
use App\Models\Group;
use Auth;


class GroupPostController extends Controller
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

        if($request->video){
           $video = uploadCloudFlairVideo($request->video);
            $gallery = null;
            // dd('v available');
        }
        else{
            $uploadedImages = $request->file('images');
            $video = null;
                // Initialize an array to store the IDs returned from the helper
                $imageIds = [];

                $checkGroupOwner = Group::find(['id' => $request->group_id, 'user_id' => Auth::id()])->first();

                if(!$checkGroupOwner){
                    return redirect()->back()->with('error', 'Somethin went wront, Please try again!');
                }
                // return redirect()->back()->with('error', 'Somethin went wront, Please try again!');

                // dd($checkGroupOwner);

                // Loop through each uploaded image
                if($uploadedImages){
                    foreach ($uploadedImages as $image) {
                        // Call the upload helper for each image and store the returned ID
                        $imageId = uploadCloudFlairImage($image);
                        $imageIds[] = $imageId;            
                        $gallery = implode(',', $imageIds);
                    }
                }
                else{
                    $gallery = null;
                }
                
            }

            // Convert the array of IDs to a comma-separated string

            // Create the post with the comma-separated image IDs
            GroupPost::create([
                'description' => $request->description,
                'image' => $gallery,
                'video' => $video,
                'user_id' => Auth::id(),
                'group_id' => $request->group_id,
                'year' => $request->year,
                
            ]);
            
            return redirect()->back()->with('success', 'Post created successfully.');


        // dd($request->all());
        // dd(Auth::id());
        // dd(uploadCloudFlairImage($request->file('gallery')));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroylll00(string $id)
    {
        
        $delete = GroupPost::where(['id' => $id, 'user_id' => Auth::id()])->first();
        // dd( $delete);

        if($delete){
            $delete->delete();
            return redirect()->back()->with('success', 'Group Deleted Successfully.');
        }
        return redirect()->back()->with('error', 'Something went wrong, please try again.');
    }

    public function destroy($id)
    {
        
        $delete = GroupPost::where(['id' => $id, 'user_id' => Auth::id()])->first();

        if($delete){
            if($delete && $delete->video){
                deleteVideo($delete->video);
                $delete->delete();
                return redirect()->back()->with('success', 'Post deleted successfully.');
            }
            elseif($delete && $delete->image) {
                // Assuming the images are stored as a comma-separated string in 'image' column
                $imageIds = explode(',', $delete->image);
                // dd(count($imageIds));
                
                if(count($imageIds) == 1) {
                    $response = deleteCloudImage($imageIds[0]);
                    // dd($imageIds[0]);
                }

                // dd(count($imageIds));
        
                foreach ($imageIds as $imageId) {
                    // dd($imageId);
                    
                    // dd($imageId);

                    $response = deleteCloudImage($imageId);
                    // dd($response);
                    // if (!isset($response->success)) {
                    //     continue; // Silently skip this image and move on to the next
                    // }
                    
                    // dd($response);
                }
                
    
            // Always delete the group post after attempting to delete images
            $delete->delete();
            return redirect()->back()->with('success', 'Post deleted successfully.');
        }
            $delete->delete();
            return redirect()->back()->with('success', 'Post deleted successfully.');
        }
    
        return redirect()->back()->with('error', 'Something went wrong, please try again.');
    
    }


}
