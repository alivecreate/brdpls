<?php
use App\Models\User;
use App\Models\City;
use App\Models\Business;
use App\Models\Category;
use App\Models\State;
use App\Models\Group;
use App\Models\CompetitionVote;
use App\Models\GaneshCompetition;
use App\Models\LiveCompetitionStatus;

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

// Competitions


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


if (!function_exists('format_number')) {
    function format_number($number)
    {
        if ($number < 1000) {
            return $number;
        }

        $units = ['k', 'M', 'B', 'T'];
        $power = floor(log($number, 1000));
        $formatted = round($number / pow(1000, $power), 1);
        return $formatted . $units[$power - 1];
    }
}


if (!function_exists('number_with_commas')) {
    function number_with_commas($number)
    {
        // Convert the number to a string
        $inrNumber = strval($number);

        // Use regex to format the number according to the Indian numbering system
        $lastThreeDigits = substr($inrNumber, -3);
        $remainingDigits = substr($inrNumber, 0, -3);

        if ($remainingDigits != '') {
            $lastThreeDigits = ',' . $lastThreeDigits;
        }

        return $remainingDigits != '' 
            ? preg_replace('/\B(?=(\d{2})+(?!\d))/', ',', $remainingDigits) . $lastThreeDigits 
            : $lastThreeDigits;
    }
}


if (!function_exists('isVoted')) {
    function isVoted($competition_id, $category_id) {
        
        return CompetitionVote::where(['competition_id' => $competition_id, 'competition_category_id' => $category_id,
             'user_id' => Auth::id()])->first();
        }
}


if (!function_exists('getTotalCategoryGroup')) {
    function getTotalCategoryGroup($category_id) {
        return GaneshCompetition::where(['competition_type' => $category_id, 'status' => 'active'])->count();
        }
}



if (!function_exists('isCompetitionStart')) {
    function isCompetitionStart($category_id) {
        return GaneshCompetition::where(['competition_type' => $category_id])->count();
        }
}

function totalVotes($votable_id, $competition_category_id)
{
    // return 33;
    return CompetitionVote::where('votable_id', $votable_id)->where('competition_category_id', $competition_category_id)->count();

    return $this->votes()->count();
}


if (!function_exists('getCompetitionGroup')) {
    function getCompetitionGroup($group_id) {
        return Group::where(['id' => $group_id])->first();
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

function checkIsGroupOwner($id){
    // dd(Auth::id());
    $group = Group::where(['id' => $id, 'user_id' => Auth::id()])->first();
    if($group){
        return true;
    }
    return false;
}


function checkCompetitionSchedule()
{
        $competition = LiveCompetitionStatus::first();
        $now = now();

        if ($competition->status === 'scheduled' && $competition->start_time <= $now) {
            
            // dd('live');
            $competition->status = 'live';
            
            // return response()->json(['status' => 'schedule', 'message' => 'Image deleted successfully.']);
        }  elseif ($competition->status === 'scheduled' && $competition->start_time >= $now) {
            
            // dd('not started');
            // $competition->status = 'scheduled';
        } elseif ($competition->status === 'live' && $competition->end_time <= $now) {
            // dd('end');
            $competition->status = 'ended';
        }


        $competition->save();
        return $competition;
}

function isGroupExists(){
    $group = Group::where('user_id', Auth::id())
    ->with('competitions')   
    ->first();
    return $group;
}

function isHomeCompetitionExists(){
    $competition = GaneshCompetition::where(['participant_id' => Auth::id(), 'competition_type' => 3])
    ->first();
    return $competition;
}

function isUserVerified(){
    $user = User::find(Auth::id());
    return $user;
}

if (!function_exists('getLanguageName')) {
    function getLanguageName()
    {
        $locales = [
            'en' => 'English',  
            'hi' => 'Hindi',
            'gu' => 'Gujarati',
            'mr' => 'Marathi',
        ];

        $currentLocale = app()->getLocale();
        return $locales[$currentLocale] ?? 'Unknown';
    }
}
