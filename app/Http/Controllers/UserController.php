<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('front.pages.form-register', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::orderBy('first_name', 'asc')->get();

        return view('front.pages.form-register', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
          
            // 'phone' => 'required|string',
        ]);
        
        $rules = [
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:8|confirmed',
        ];
    
        // Validation messages (optional)
        $messages = [
            'phone.unique' => 'The phone number has already been used.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',

            // Add custom error messages for other rules as needed
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            // dd('failed');
            return redirect()->back()->withErrors($validator)->withInput();
        }  
        // dd('success');



        $users = User::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'phone' => $request->phone, 
            'password' => Hash::make($request->password), 
            'username' => $request->username, 
            'email' => $request->email, 
            'bio' => $request->bio, 
            'gender' => $request->gender,
            'relationship' =>$request->relationship,
            'status' => 1
        ]);


        $request->session()->put('isLoginSession', $users->id);
        return redirect()->route('setting')->with('success', 'Account Created Successfully.');

            // $rememberToken = $user->createRememberToken(); // Assume this method generates a unique token and saves it with the user
            // Cookie::queue('remember', $rememberToken, 365 * 24 * 60 * 60); // 2 weeks
            

    }
    public function checkAuth(Request $request){
       
        {
            // dd($request->all());

            $credentials = $request->only('phone', 'password');
            $rememberMe = $request->filled('remember');
        
            if (Auth::attempt($credentials, $rememberMe)) {
                $user = Auth::user();
        
                if ($rememberMe) {
                    $rememberToken = $user->createRememberToken(); // Assume this method generates a unique token and saves it with the user
                    Cookie::queue('remember', $rememberToken, 365 * 24 * 60 * 60); // 2 weeks
                }
                
                
                    $user = User::where('phone',  $request->phone)->select('id')->first();
                    $request->session()->put('isLoginSession', $user->id);
        
                return redirect()->route('index');
            }
        
            return back()->withErrors([
                'phone' => 'The provided credentials do not match our records.',
            ]);
        }
    }
        
    public function logout(Request $request){
        // $request->session()->forget('userData');
        // return redirect()->route('login')->with('success', 'Successfully Loged Out'); 
            
            Auth::logout();
            $auth = Cookie::queue(Cookie::forget('remember'));        
            $request->session()->forget('userData');
            // dd('yes cookie');
            
            // dd($auth);
            return redirect()->route('login')->with('success', 'Successfully Logged Out'); 

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


        $users = User::find($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $users->image;
        }


        if ($users) {
            $users->update([
               
                'username' => $request->username, 
                'email' => $request->email, 
                'bio' => $request->bio, 
                'gender' => $request->gender,
                'relationship' =>$request->relationship,
                'status' => 1

            ]);
            
            return redirect()->route('index')
                ->with('success', 'profile updated successfully');
            }
            else {
                return redirect()->route('setting')->with('error', 'Profile not found');
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
