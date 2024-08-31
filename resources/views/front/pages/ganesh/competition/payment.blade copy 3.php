<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Complete Payment</h2>
            
            <button id="rzp-button1" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Pay Now
            </button>
        </div>
    </div>
    

    <form id="rzp-paymentresponse" action="{{ route('payment.callback') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
        <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
        <input type="hidden" id="razorpay_signature" name="razorpay_signature">
    </form>

    <script>
        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": "{{$order->amount}}", // Amount is in currency subunits. Default currency is INR. Hence, 10000 refers to 100 INR
            "currency": "INR",
            "name": "Alivecreate Web Solutions",
            "description": "Ganesh Competitions",
            "order_id": "{{ $orderId }}", //This is a sample Order ID. Pass the `id` obtained in the previous step
            "handler": function (response){
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                document.getElementById('razorpay_signature').value = response.razorpay_signature;
                document.getElementById('rzp-paymentresponse').submit();
            },
            "prefill": {
                "name": "Krishna Kahar",
                "contact": "9137634193"
            },
            "notes": {
                "address": "Vadodara"
            },
            "theme": {
                "color": "#3399cc"
            },

        "method": {
            "upi": true // Ensure UPI is set to true
         }
        };
        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>
</html>
