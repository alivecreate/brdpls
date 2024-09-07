<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use Auth;

class PostsController extends Controller
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
        $posts = Post::orderBy('description', 'asc')->get();

        return view('front.widget.status-block', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd(Auth::id());

        // dd(uploadCloudFlairImage($request->file('gallery')));

        $gallery = uploadCloudFlairImage($request->file('gallery'));

        Post::create([
            'description' => $request->description,
            'gallery' => $gallery,
            'user_id' => Auth::id()
        ]);
        
    

        return redirect()->back()->with('success', 'Status Created Successfully.');
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
    public function destroy(string $id)
    {
        //public function destroy($id)
        {
            $post = Post::findOrFail($id);
            // dd($post);
            $post->delete();

            // deleteCloudImage($post->gallery);

            return redirect()->back()->with('success', 'Post deleted successfully.');
        }

    }
}
