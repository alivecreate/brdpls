<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use App\Models\Group;
use App\Models\GaneshCompetition;
use App\Models\User;
use App\Models\GaneshCompetitionPayment;


use Illuminate\Support\Str;
use Auth;



class GaneshCompetitionPaymentController extends Controller
{
    public function create(Request $request){



        $user_id = Auth::id();
        
$user = User::where(['id' => Auth::id()])->first();


$RAZORPAY_KEY = env('RAZORPAY_KEY');
$RAZORPAY_SECRET = env('RAZORPAY_SECRET');
        // dd($RAZORPAY_SECRET);

// Live Mode



$api = new Api($RAZORPAY_KEY, $RAZORPAY_SECRET);
$receipt = str_pad(mt_rand(0, 99999999), 6, '0', STR_PAD_LEFT);

// Test 
// rzp_test_ZscVBDvg0RRGvq

$groups = Group::where('status', 'active')->orderBy('id', 'desc')->limit(6)->get();
        
if($request->query('type') == 'group'){
    $amount = 501;
    $name = 'ગણેશ સ્પર્ધા ફી - Barodaplus';
}
elseif($request->query('type') == 'home'){
    $amount = 251;
    $name = 'ગણેશ સ્પર્ધા ફી - Barodaplus';
}
elseif($request->query('type') == 'test'){
    $amount = 1.5;
    $name = 'ગણેશ સ્પર્ધા ફી - Barodaplus';
}
elseif($request->query('type') == 'test'){

}
else{
    // dd('test');
    return redirect()->route('ganeshFestivalGroup.create');
}

if(!Auth::check()){
    return redirect('registration')->with('error', 'Please Create User Account First.');
}

$homeGaneshCompetition = GaneshCompetition::where(['competition_type' => 3, 'participant_id' => $user_id])->first();
$homeGaneshCompetitionLists = GaneshCompetition::where(['competition_type' => 3, 'status' => 'active'])->orderBy('id', 'desc')->limit(5)->get();

if($homeGaneshCompetition){
    // dd('home');
    $group = null;
    $group_id = null;
    $competition_id = null;
    
    $order = $api->order->create(array(
        'receipt' => $receipt,
         'amount' => $amount*100,      
         'currency' => 'INR',
          'notes'=> array(
            'user_id'=> Auth::id(),
            'group_id'=> null,
            'competition_id' => null
        )));
        
        //   dd($order['amount']);
        
        $orderId = $order['id'];
        
    $group_id = null;
    return view('front.pages.ganesh.competition.payment-home', 
    compact('orderId', 'order', 'group', 'group_id', 'groups', 'user', 'user_id', 'competition_id',  'amount', 'homeGaneshCompetition', 'homeGaneshCompetitionLists'));

}


// dd($user);



$group = Group::where(['user_id' => Auth::id()])->first();
// dd($group);
if($group){
// dd('not group');

    // return redirect()->route('ganeshFestivalGroup.create');
    // dd('no grp');

    
$RAZORPAY_KEY = env('RAZORPAY_KEY');
$RAZORPAY_SECRET = env('RAZORPAY_SECRET');

    $order = $api->order->create(array(
        'receipt' => $receipt,
         'amount' => $amount*100,
         
        
         'currency' => 'INR',
          'notes'=> array(
            'user_id'=> Auth::id(),
            'group_id'=> null,
            'competition_id' => null
        )));
        
        //   dd($order['amount']);
        
        $orderId = $order['id'];

        // return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'group']);

    return view('front.pages.ganesh.competition.payment', 
    compact('orderId', 'order', 'group', 'groups', 'user', 'user_id',  'amount'));

    $competition = GaneshCompetition::where(['participant_id' => $group->id])->first();
    
$group_id = $group->id;
$competition_id = $competition->id;

  $order['amount'] = null;

$orderId = null;
$competition = GaneshCompetition::where(['participant_id' => $group->id])->first();


    if(!$competition){
        
        return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'home']);
        return redirect()->route('ganeshFestivalGroup.create');
    }
    
    return view('front.pages.ganesh.competition.payment', 
    compact('orderId', 'order', 'group', 'competition', 'groups', 'user', 'user_id', 'group_id', 'competition_id', 'amount'));   
}

return redirect()->route('ganeshFestivalCompetition.create');



// dd('yes grp');



    }

    
    public function homeCompetitionCallback(Request $request)
    {
        

    $input = $request->all(); 

    // dd($input);
$RAZORPAY_KEY = env('RAZORPAY_KEY');
$RAZORPAY_SECRET = env('RAZORPAY_SECRET');


    $api = new Api($RAZORPAY_KEY, $RAZORPAY_SECRET);

    $attributes = [
        'razorpay_payment_id' => $request['razorpay_payment_id'],
        'razorpay_order_id' => $request['razorpay_order_id'],
        'razorpay_signature' => $request['razorpay_signature']
    ];

    try {
        // Fetch payment details
        $payment = $api->payment->fetch($request['razorpay_payment_id']);
        
        // Log the payment id and order id for debugging
        \Log::info('Razorpay payment ID: ' . $payment->id);
        \Log::info('Razorpay order ID: ' . $payment->order_id);

        // Verify the payment signature
        $api->utility->verifyPaymentSignature($attributes);

        // Payment is successful and signature is verified

        $payment = GaneshCompetitionPayment::create([
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_order_id' => $request->competition_id,
            'receipt' => $request->receipt,
            'amount' => $request->amount,
            'user_id' => $request->user_id,
            'group_id' => $request->group_id,
            'name' => $request->name,
            'competition_id' => $request->competition_id,
        ]);
        // $records = ModelName::where('status', '!=', 'active')->get();

        $ganeshCompetition = GaneshCompetition::where('participant_id', $request->user_id)->where('status', '!=', 'active')->first();
        // dd($ganeshCompetition);
        

        $ganeshCompetition->update(
            ['status' => 'active']
        );
        
    return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'home']);
        return redirect()->route('competitionPaymentSuccess');

    } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
        // Signature verification failed
        return redirect()->route('payment.failed')->with('error', 'Razorpay Error: ' . $e->getMessage());
    }
}


public function groupCompetitionCallback(Request $request)
{

// $input = $request->all(); 

// dd($input);

$RAZORPAY_KEY = env('RAZORPAY_KEY');
$RAZORPAY_SECRET = env('RAZORPAY_SECRET');


    $api = new Api($RAZORPAY_KEY, $RAZORPAY_SECRET);

$attributes = [
    'razorpay_payment_id' => $request['razorpay_payment_id'],
    'razorpay_order_id' => $request['razorpay_order_id'],
    'razorpay_signature' => $request['razorpay_signature']
];

try {
    // Fetch payment details
    $payment = $api->payment->fetch($request['razorpay_payment_id']);
    
    // Log the payment id and order id for debugging
    \Log::info('Razorpay payment ID: ' . $payment->id);
    \Log::info('Razorpay order ID: ' . $payment->order_id);

    // Verify the payment signature
    $api->utility->verifyPaymentSignature($attributes);

    // Payment is successful and signature is verified

    $payment = GaneshCompetitionPayment::create([
        'razorpay_payment_id' => $request->razorpay_payment_id,
        'razorpay_order_id' => $request->competition_id,
        'receipt' => $request->receipt,
        'amount' => $request->amount,
        'user_id' => $request->user_id,
        'group_id' => $request->group_id,
        'name' => $request->name,
        'competition_id' => $request->competition_id,
    ]);

    // dd($request->group_id);

    
$competition = GaneshCompetition::where('participant_id', $request->group_id)
->where('competition_type', '1-2')
->first();

$groupExist = Group::where(['id' => $request->group_id, 'user_id' => Auth::id()])->first(); // Replace with actual group ID

if($groupExist && !$competition)
{
    // dd('exist');
    GaneshCompetition::create([
        'competition_type' => '1-2',
        'name' =>  null,
        'status' => 'active',
        'participant_id' => $request->group_id,
        'participant_type' => Group::class,
    ]);

    
    return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'group']);
    return redirect()->route('competitionPaymentSuccess');
}
// dd('not exist');


return redirect()->back()->with('error', 'Something went wrong, please try again.');

// return redirect()->route('ganeshCompetitionPaymentCreate', ['type'=>'group'])->with('success', 'Ganesh Competition Registered Successfully');

    
    
    $ganeshCompetition = GaneshCompetition::where(['participant_id' => $request->group_id])->first();
    // dd($ganeshCompetition);
    $ganeshCompetition->update(
        ['status' => 'active']
    );
    
    return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'home']);

    return redirect()->route('competitionPaymentSuccess');

} catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
    // Signature verification failed
    return redirect()->route('payment.failed')->with('error', 'Razorpay Error: ' . $e->getMessage());
}
}


public function competitionPaymentSuccess(){
           
    $user = User::where(['id' => Auth::id()])->first();
    
    $groups = Group::where('status', 'active')->orderBy('id', 'desc')->limit(6)->get();
            
        return view('front.pages.ganesh.competition.payment-success', compact('groups', 'user'));
    }

    public function competitionPaymentFailed(){
               
    $user = User::where(['id' => Auth::id()])->first();
    
    $groups = Group::where('status', 'active')->orderBy('id', 'desc')->get();
            
        return view('front.pages.ganesh.competition.payment-fail', compact('groups', 'user'));
    }

}
