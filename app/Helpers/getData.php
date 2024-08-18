<?php
use App\Models\User;
use App\Models\City;
use App\Models\Business;
use App\Models\Category;
use App\Models\State;
use Carbon\Carbon;


function getUserData(){
    $sessionId = Session::get('isLoginSession');
    // dd($sessionId);
    $data = User::find($sessionId);

    return $data;
}

function getGujaratCities(){
    
    $data = City::where('state_id', 7)->get();
    return $data;
}

function convertcase(){
    $cities = State::all();

    foreach ($cities as $city) {
        $city->name = strtolower($city->name);
        $city->save();
    }

    return 'state updated';
}


function getStates(){
  

    $data = State::get();
    return $data;
}


function getBusinessCategories(){
    $data = Category::where('status', 'active')->get();

    return $data;
}



function generateRandomNumericString($length = 10)
{
    $numbers = '0123456789';
    $numbersLength = strlen($numbers);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $numbers[random_int(0, $numbersLength - 1)];
    }
    return $randomString;
}


if (!function_exists('getTimeOptions')) {
    function getTimeOptions() {
        return ['Open 24h', 'Closed', '07:00 AM', '07:15 AM', '07:30 AM', '07:45 AM', '08:00 AM', '08:15 AM', '08:30 AM', '08:45 AM', '09:00 AM', '09:15 AM', '09:30 AM', '09:45 AM', '10:00 AM', '10:15 AM', '10:30 AM', '10:45 AM', '11:00 AM', '11:15 AM', '11:30 AM', '11:45 AM', '12:00 PM', '12:15 PM', '12:30 PM', '12:45 PM', '01:00 PM', '01:15 PM', '01:30 PM', '01:45 PM', '02:00 PM', '02:15 PM', '02:30 PM', '02:45 PM', '03:00 PM', '03:15 PM', '03:30 PM', '03:45 PM', '04:00 PM', '04:15 PM', '04:30 PM', '04:45 PM', '05:00 PM', '05:15 PM', '05:30 PM', '05:45 PM', '06:00 PM', '06:15 PM', '06:30 PM', '06:45 PM', '07:00 PM', '07:15 PM', '07:30 PM', '07:45 PM', '08:00 PM', '08:15 PM', '08:30 PM', '08:45 PM', '09:00 PM', '09:15 PM', '09:30 PM', '09:45 PM', '10:00 PM', '10:15 PM', '10:30 PM', '10:45 PM', '11:00 PM', '11:15 PM', '11:30 PM', '11:45 PM', '12:00 AM', '12:15 AM', '12:30 AM', '12:45 AM', '01:00 AM', '01:15 AM', '01:30 AM', '01:45 AM', '02:00 AM', '02:15 AM', '02:30 AM', '02:45 AM', '03:00 AM', '03:15 AM', '03:30 AM', '03:45 AM', '04:00 AM', '04:15 AM', '04:30 AM', '04:45 AM', '05:00 AM', '05:15 AM', '05:30 AM', '05:45 AM', '06:00 AM', '06:15 AM', '06:30 AM', '06:45 AM',
        ];
    }
}


if (!function_exists('getContactTitles')) {
    function getContactTitles() {
        return ['Mr', 'Ms', 'Mrs', 'Dr', 'Prof'];
    }
}


function getDays(){
    return ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
}

// function checkTiming($day, $time){
//  return 
// }

function formatDate($dateString, $format = 'd-m-Y h:i A')
{
    try {
        // Create a Carbon instance from the date string
        if($dateString){
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $dateString);
    }else
    {
        return null;
    }
        // Format the date and time
        return $date->format($format);
    } catch (\Exception $e) {
        // Handle exceptions if the date string is invalid
        return 'Invalid date format';
    }
}

function CheckBusinessStatus($business_id, $user_id){
    
    $business = Business::where(['id' => $business_id, 'user_id' => $user_id])
    ->where('status', '!=', 'deleted')
    ->first();
    return 'test';
    if($business){
        return redirect(route('myBusiness'));
    }

}