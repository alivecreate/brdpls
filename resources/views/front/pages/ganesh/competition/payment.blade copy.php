@extends('front.layout.ganesh-festival-layout')


@section('custom-head')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@endsection

@section('content')




<main id="site__main"
    class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

    <div class=""
        id="js-oversized">

        <div class="flex-1 px-6">


            <div class="w-full">

                <p class='heading-h1 font-semibold page-title text-underline'>ગણેશ સ્પર્ધા ફી </p>
                    
                <!-- <p class='subheading-h3 font-semibold font-semibold mb-0'>Note: ગણેશ સ્પર્ધા તા. 07-09-2024 બપોરે 2 વાગ્યેથી શરુ થશે.</p> -->


                <div id="type1-2Form" class="competition-form">
                    @if($group)
                    <div class="flex md:items-center space-x-4 p-4 rounded-md box">
                        <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative">
                            @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm"
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                            @endif

                        </div>
                        <div class="flex-1">
                            <a
                                class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">{{$group->name}}</a>

                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon">
                                <div>
                                    <ion-icon class='text-xl' name="location-outline"></ion-icon>
                                    {{$group->address}}
                                </div>
                            </div>
                            <div class="flex space-x-2 items-center text-sm font-normal flex-icon mt-2">

                                <div>
                                    <ion-icon class='text-xl' name="time-outline"></ion-icon>
                                    {{$group->created_at}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session('error'))
                    <p class="text-danger">{{session('error')}}</p>
                    @endif

                    @if(count($group->competitions) == 1 && $group->myCompetition[0]->status == 'pending')

                     
            <button id="rzp-button1" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Pay Registration Fee
            </button>

    <form id="rzp-paymentresponse" action="{{ route('payment.callback') }}" method="POST" style="display: none;">
        @csrf
        <input type="text" name="" id="" value="{{$user_id}}">
        <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
        <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
        <input type="hidden" id="razorpay_signature" name="razorpay_signature">

        <input type="hidden" id="receipt" name="{{$order->receipt}}">
        <input type="hidden" id="amount" name="{{$order->amount}}">
        <input type="hidden" id="user_id" name="{{$user_id}}">
        <input type="hidden" id="group_id" name="{{$group_id}}">
        <input type="hidden" id="name" name="{{$group->name}}">
        <input type="hidden" id="competition_id" name="{{$competition_id}}">
        <input type="hidden" id="user" name="name" value="{{$user->first_name}} {{$user->last_name}}">

        
        
                

    </form>

    <script>
        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}", // Enter the Key ID generated from the Dashboard
            "amount": "{{$order->amount}}", // Amount is in currency subunits. Default currency is INR. Hence, 10000 refers to 100 INR
            "currency": "INR",
            "name": "Ganesh Competition - Brodaplus",
            "description": "Ganesh Competitions - Barodaplus - Vadodara",
            "order_id": "{{ $orderId }}", //This is a sample Order ID. Pass the `id` obtained in the previous step
            "handler": function (response){
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                document.getElementById('razorpay_signature').value = response.razorpay_signature;
                document.getElementById('rzp-paymentresponse').submit();
            },
            "prefill": {
                "name": {{$user->first_name}} {{$user->last_name}},
                "contact": {{$user->phone}}
            },
            "notes": {
                "address": {{$group->city}}
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

                    @else
                    <div class="flex w-full items-center gap-4 mt-6">
                        <a href="{{route('ganeshFestivalCompetition.create', ['type'=>'group'])}}"
                            class="font-semibold btn-md button lg:px-10 bg-primary text-white text-24 w-full">ગણેશ સ્પર્ધામાં રજિસ્ટ્રેશન કરો <span class="ripple-overlay"></span></a>
                    </div>

                    @endif

                    @endif

                </div>
            </div>
        </div>


        <div class="2xl:w-[380px] lg:w-[330px] w-full">

            <div class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                uk-sticky="media: 1024; end: #js-oversized; offset: 80">



                <div class="box p-5 px-6">

                    <div class="flex items-baseline justify-between text-black dark:text-white">
                        <h3 class="font-bold text-base"> Recent Ganesh Mandal </h3>
                        <a href="" class="text-sm text-blue-500">See all</a>
                    </div>

                    <div class="side-list">

                    @foreach($groups as $group)    
                        <div class="side-list-item">
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                                
                            @if(optional($group)->cover)
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/icon" alt="{{$group->name}}"
                                class="side-list-image rounded-full cover" 
                                >
                            @else 
                                <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                class="side-list-image rounded-full">
                            @endif
                            </a>
                            <div class="flex-1">
                                <a  href="{{ route('ganeshFestivalGroup.show', $group->slug) }}">
                                    <h4 class="side-list-title">{{$group->name}}</h4>
                                </a>
                                <div class="side-list-info"> {{$group->address}} </div>
                            </div>
                            <a href="{{ route('ganeshFestivalGroup.show', $group->slug) }}" class="button bg-secondery">View</a>
                        </div>
                        @endforeach
                        
                    </div>

                </div>

                
                <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                    <img src="{{asset('front/images/web')}}/advertise-and-sponsorship-barodaplus.webp"/>
                </div>

            </div>

        </div>

    </div>

</main>



</div>
</div>
</div>



@include('front.widget.product-modal-block')


@endsection