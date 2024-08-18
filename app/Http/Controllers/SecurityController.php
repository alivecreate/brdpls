<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Security;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('test');
        $security = Security::all();
        return view('front.widget.user-setting', compact('security'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $security = Security::orderBy('current_password', 'asc')->get();

        return view('front.widget.user-setting', compact('security'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string',
          
            // 'phone' => 'required|string',
        ]);
        
        $rules = [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8', 
            'repeat_password' => 'required|string|same:new_password',
        ];
    
        // Validation messages (optional)
        $messages = [
            'current_password.required' => 'The current password field is required.',
            'new_password.required' => 'The new password field is required.',
            'new_password.min' => 'The new password must be at least 8 characters.',
            'repeat_password.required' => 'The repeat password field is required.',
            'repeat_password.same' => 'The repeat password must match the new password.',

            // Add custom error messages for other rules as needed
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            // dd('failed');
            return redirect()->back()->withErrors($validator)->withInput();
        }  
        // dd('success');



        $security = Security::create([
            'current_password' => Hash::make($request->current_password), 
            'new_password' => Hash::make($request->new_password), 
            'repeat_password' => Hash::make($request->repeat_password), 
            'authentication' => $request->authentication, 
            'status' => 1
        ]);


        return redirect()->route('setting')->with('success', 'Password Created Successfully.');
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
        //  dd($request->all());


         $security = Security::find($id);

      
         if ($security) {
             $security->update([
                
                'current_password' => Hash::make($request->current_password), 
                'new_password' => Hash::make($request->new_password), 
                'repeat_password' => Hash::make($request->repeat_password), 
                'authentication' => $request->authentication, 
                'status' => 1
 
             ]);
             
             return redirect()->route('index')
                 ->with('success', 'Password updated successfully');
             }
             else {
                 return redirect()->route('setting')->with('error', 'Password not found');
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
