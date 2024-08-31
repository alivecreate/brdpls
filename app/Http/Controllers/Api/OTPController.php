<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class OTPController extends Controller
{
    public function resendOtp(Request $request){
        // dd($request->all());
        
        $user = User::where('cid', $request->cid)->first();
        // return true;
        // return true;

        if($user){

            $otp = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $otpRes = sendOTP($user->first_name.' '.$user->last_name, $otp, $user->phone);
            
            $user->update([
                'otp' => $otp
            ]);

            

            $response = json_decode($otpRes, true);
            if (isset($response['return']) && $response['return'] === false) {
                // Handle the error case based on status_code or message
                if ($response['status_code'] == 411) {
                    return false;
                    echo "Error: " . $response['message']; // Output: Error: Invalid Numbers
                }
            } else {
                // Handle the success case
                return true;
                echo "Success!";
            }

            if($response){
                return $response;
                return $response;
            }
            return true;
        }
        return false;
    }
}