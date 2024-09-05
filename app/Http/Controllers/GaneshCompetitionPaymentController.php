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

        // dd('test');


        $user_id = Auth::id();
        
$user = User::where(['id' => Auth::id()])->first();




$api = new Api('rzp_live_jNnuOXSAHlPWjB', 'N9TyzDVHjAs2hwhvDvdGSAhw');
$receipt = str_pad(mt_rand(0, 99999999), 6, '0', STR_PAD_LEFT);

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
    return redirect()->route('ganeshFestivalGroup.create');
}

if(!Auth::check()){
    return redirect('registration')->with('error', 'Please Create User Account First.');
}

$homeGaneshCompetition = GaneshCompetition::where(['competition_type' => 3, 'participant_id' => $user_id, 'status' => 'pending'])->first();
$homeGaneshCompetitionLists = GaneshCompetition::where(['competition_type' => 3, 'participant_id' => $user_id, 'status' => 'pending'])->orderBy('id', 'desc')->get();

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
        
    return view('front.pages.ganesh.competition.payment-home', 
    compact('orderId', 'order', 'group', 'group_id', 'groups', 'user', 'user_id', 'competition_id',  'amount', 'homeGaneshCompetition', 'homeGaneshCompetitionLists'));

}


// dd($user);



$group = Group::where(['user_id' => Auth::id()])->first();
if(!$group){

    return redirect()->route('ganeshFestivalGroup.create');
    // dd('no grp');
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
        
    return view('front.pages.ganesh.competition.payment', 
    compact('orderId', 'order', 'group', 'groups', 'user', 'user_id',  'amount'));

}

// dd('yes grp');


$competition = GaneshCompetition::where(['participant_id' => $group->id])->first();
if(!$competition){
    return redirect()->route('ganeshFestivalGroup.create');
}


$group_id = $group->id;
$competition_id = $competition->id;

$order = $api->order->create(array(
'receipt' => $receipt,
 'amount' => $amount*100,
 

 'currency' => 'INR',
  'notes'=> array(
    'user_id'=> Auth::id(),
    'group_id'=> $group,
    'competition_id' => $competition->id
)));

//   dd($order['amount']);

$orderId = $order['id'];

if($group){
    $competition = GaneshCompetition::where(['participant_id' => $group->id])->first();
    return view('front.pages.ganesh.competition.payment', 
    compact('orderId', 'order', 'group', 'competition', 'groups', 'user', 'user_id', 'group_id', 'competition_id', 'amount'));
    // dd($group);
}


    }

    
    public function homeCompetitionCallback(Request $request)
    {
        

    $input = $request->all(); 

    // dd($input);

    $api = new Api('rzp_live_jNnuOXSAHlPWjB', 'N9TyzDVHjAs2hwhvDvdGSAhw');

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

        $ganeshCompetition = GaneshCompetition::where(['participant_id' => $request->user_id, 'status' => 'pending'])->first();

        $ganeshCompetition->update(
            ['status' => 'active']
        );
        
        return redirect()->route('competitionPaymentSuccess');

    } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
        // Signature verification failed
        return redirect()->route('payment.failed')->with('error', 'Razorpay Error: ' . $e->getMessage());
    }
}

public function competitionPaymentSuccess(){
           
    $user = User::where(['id' => Auth::id()])->first();
    
    $groups = Group::where('status', 'active')->orderBy('id', 'desc')->get();
            
        return view('front.pages.ganesh.competition.payment-success', compact('groups', 'user'));
    }

    public function competitionPaymentFailed(){
               
    $user = User::where(['id' => Auth::id()])->first();
    
    $groups = Group::where('status', 'active')->orderBy('id', 'desc')->get();
            
        return view('front.pages.ganesh.competition.payment-fail', compact('groups', 'user'));
    }

}
