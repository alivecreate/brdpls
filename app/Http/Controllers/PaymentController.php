<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Razorpay\Api\Api;
use Session;
use Exception;

use App\Models\GaneshCompetitionPayment;
use App\Models\GaneshCompetition;



class PaymentController extends Controller
{
    public function createOrder()
    {
        
        $api = new Api('rzp_live_tikv5K0KsgzLkq', 'QxfSqoCiQmRJdeXD1LYxF7xn');

        $order = $api->order->create(array('receipt' => '123', 'amount' => 1 * 100, 'currency' => 'INR', 'notes'=> array('key1'=> 'value3','key2'=> 'value2')));


        // $api = new Api('rzp_live_jNnuOXSAHlPWjB', 'D33oGQInRgnCV0jnyxYPgLxw');

        // $order = $api->order->create(array(
        //     'receipt' => 'order_rcptid_11',
        //     'amount' => 1 * 100, // amount in the smallest currency unit
        //     'currency' => 'INR',
        // ));
        $orderId = $order['id'];
        
        return view('front.pages.ganesh.competition.payment', compact('orderId', 'order'));

        // return view('payment', compact('orderId'));
    }

    
    public function paymentCallback(Request $request)
    {

    // $input = $request->all(); 

    // dd($input);

    $api = new Api('rzp_live_jNnuOXSAHlPWjB', 'D33oGQInRgnCV0jnyxYPgLxw');

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

        $ganeshCompetition = GaneshCompetition::where(['participant_id' => $request->group_id, 'status' => 'pending'])->first();

        $ganeshCompetition->update(
            ['status' => 'active']
        );
        
        return redirect()->route('competitionPaymentSuccess');

    } catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
        // Signature verification failed
        return redirect()->route('payment.failed')->with('error', 'Razorpay Error: ' . $e->getMessage());
    }
}
}
