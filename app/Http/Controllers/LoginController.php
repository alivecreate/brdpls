<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use Carbon\Carbon;


class LoginController extends Controller
{
    //
    public function index(){
        return view('front.pages.form-login', compact('login'));
    }


    public function checkAuth(Request $request){
    {
    $credentials = $request->only('phone', 'password');
    $rememberMe = $request->filled('remember');

    if (Auth::attempt($credentials, $rememberMe)) {
        $user = Auth::user();

        if ($rememberMe) {
            $rememberToken = $user->createRememberToken(); // Assume this method generates a unique token and saves it with the user
            // Cookie::queue('remember', $rememberToken, 365 * 24 * 60 * 60); // 2 weeks

            Cookie::queue(Cookie::make('remember', $rememberMe, 60 * 24 * 365)); // 1 year

        }
        $cookie = Cookie::queue(Cookie::make('remember', '111asss1111', 60 * 24 * 365)); // 1 year
        
            $data = User::where('phone',  $request->phone)->select('id', 'name', 'phone')->first();
            $request->session()->put('userData', $data);

        return redirect()->route('index');
    }

    return back()->withErrors([
        'phone' => 'The provided credentials do not match our records.',
    ]);
}



        

    // $rememberMe = $request->filled('rememberMe');
    // // dd($rememberMe, $request->all());


    //     $email = $request->email;
    //     $password = $request->password;

    //     $data = User::where('email', $email)
    //             ->where('password', $password)
    //             ->get();

    //     // return $data[0];

    //     if($data->isNotEmpty()){
    //         $request->session()->put('userData', $data[0]);
    //         return redirect()->route('admin.index')->with('success', 'Login Successfully.');
    //     }
    //     else{
            
    //         return redirect()->back()->with('fail', 'Invalid Email and Password');
    //     }

        
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
    

}