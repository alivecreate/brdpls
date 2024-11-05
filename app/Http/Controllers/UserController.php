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
            'gender' => 'required|string',
          
            // 'phone' => 'required|string',
        ]);
        
        $rules = [
            'phone' =>  ['required', 'regex:/^\d{10}$/', 'unique:users,phone'],
            'password' => 'required|min:6',
        ];
    
        // Validation messages (optional)
        $messages = [
            'phone.unique' => 'The phone number has already been used.',
            'phone.regex' => 'The phone number must be exactly 10 digits.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.confirmed' => 'The password confirmation does not match.',

            // Add custom error messages for other rules as needed
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            // dd('failed');
            
            // return redirect()->back()->with('error', 'Something Went Wrong');
            return redirect()->back()->withErrors($validator)->withInput();
        }  
        
        

        $otp = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        sendOTP($request->first_name.' '.$request->last_name, $otp, $request->phone);
        
        $cid = Str::lower(Str::random(12));



        $user = User::create([
            'cid'=> $cid,
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'phone' => $request->phone, 
            'otp' => $otp,
            'password' => Hash::make($request->password), 
            'username' => $request->username, 
            'email' => $request->email, 
            'bio' => $request->bio, 
            'gender' => $request->gender,
            'relationship' =>$request->relationship,
            'status' => 'pending'
        ]);

        // $user = Auth::user();

        // // dd($user);
        
        //     $rememberToken = $user->createRememberToken(); // Assume this method generates a unique token and saves it with the user
        //     Cookie::queue('remember', $rememberToken, 365 * 24 * 60 * 60); // 2 weeks
                        
        //     $request->session()->put('isLoginSession', $user->id);

            Auth::login($user);

            $request->session()->put('isLoginSession', $user->id);

            return redirect()->route('userVerification', ['cid' => $cid])->with('success', 'Account Created Successfully.');
            
    }
    public function checkAuth(Request $request){
        {
            // dd($request->all());

            $credentials = $request->only('phone', 'password');
            $rememberMe = $request->filled('remember');
        
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                // dd($user);
        
                if ($rememberMe) {
                    $rememberToken = Str::random(60);
                    Cookie::queue('remember', $rememberToken, 365 * 24 * 60 * 60); // 2 weeks
                }
                
                    $user = User::where('phone',  $request->phone)->select('id')->first();
                    $request->session()->put('isLoginSession', $user->id);
        

                if ($user->status != 'active') {
                    return redirect()->route('userVerification',['cid' => getUserData()['cid']]);
                }
                return redirect()->route('index');

        }
        
            return back()->withErrors([
                'phone' => 'The phone number or password is incorrect.',
            ]);
        }
    }

    
    public function saveChangePassword(Request $request){
        {

            $rules = [
                'password' => 'required|min:6',
            ];
        
            // Validation messages (optional)
            $messages = [
                'password.required' => 'The password field is required.',
                'password.min' => 'The password must be at least 6 characters.',
                'password.confirmed' => 'The password confirmation does not match.',
    
            ];
    
            $validator = Validator::make($request->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }  
        
            
        $user = User::where('cid', $request->cid)->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        $request->session()->put('isLoginSession', $user->id);
        return redirect()->route('index')->with('success', 'Password Successfully Changed.');
 
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

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $users = User::find($id);

        if($request->file('image')){
            $image_name = uploadImageThumb($request);
        }
        else{
            $image_name = $users->image;
        }


        if ($users) {
            $users->update([
               
                'first_name' => $request->first_name, 
                'last_name' => $request->last_name, 
                'email' => $request->email, 
                'bio' => $request->bio, 
                'gender' => $request->gender,
                'relationship' =>$request->relationship,

            ]);
            return redirect()->back()->with('success', 'Profile updated successfully');
            
            }
            else {
                return redirect()->back()->with('error', 'Something went wrong, please try again.');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateProfilePic(Request $request){
        // $request = uploadCloudImage($request);

        
        try {
            $user = User::find(Auth::id());
            $image = $request->file('image');
            
            if ($image) {
                $imageId = uploadCloudImage($image);
                
                if ($imageId) {
                    $image = $imageId;
                } else {
                    $image = null;
                }
                
                $user->update([
                    'image' => $image,
                ]);
                
                return redirect()->back()->with('success', 'Profile Picture Updated.');
            }
            else{
                return redirect()->back()->with('success', 'Profile Picture Updated.');
            }
        } catch (\Exception $e) {
            // Handle the exception and log the error if needed
            \Log::error('Error updating profile picture: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update profile picture. Please try again.');
        }

       
        }


}
