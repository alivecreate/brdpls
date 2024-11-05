@extends('front.layout.landing-layout')


@section('content')


<!-- main contents -->
<main id="site__main" class="w-full py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
                 
    <div class='business-info-b text-center'>
        <h2 class="font-semibold">Create Business <span>(Step 1)</span></h2>
    </div>


    <div class="stepper">
        <div class="step active">
            <div class="step-circle  bg-danger">1</div>
            <div class="step-bar"></div>
            <div class="step-text">Create Business</div>
        </div>
        <div class="step">
            <div class="step-circle">2</div>
            <div class="step-bar"></div>
            <div class="step-text">Timing</div>
        </div>
        <div class="step">
            <div class="step-circle">3</div>
            <div class="step-bar"></div>
            <div class="step-text">Business Details</div>
        </div>
        <div class="step">
            <div class="step-circle">4</div>
            <div class="step-text">Categories</div>
        </div>
    </div>


<div class="lg:flex mx-auto lg:mt-2 mt-6 " id="js-oversized">

        <div class="lg:flex mx-auto lg:mt-2 mt-6 gap-12">
            <div class="2xl:w-[600px] lg:w-[600px] w-full">
                <div class='business-info-b'>
                    <h1 class="heading-h1 font-semibold">List Unlimited Business in <span
                        class="text-danger text-right">just ₹365 / Year</span></h1>
                    <h2>Baroda's Own Business Platform</h2>

                    <h3>Features:</h3>
                    <ul>
                        <li>
                            <ion-icon name="checkmark-sharp"></ion-icon> Unlimited Business
                        </li>
                        <li>
                            <ion-icon name="checkmark-sharp"></ion-icon> Free Digital Card
                        </li>
                        <li>
                            <ion-icon name="checkmark-sharp"></ion-icon> Free Website
                        </li>
                        <li>
                            <ion-icon name="checkmark-sharp"></ion-icon> Unlimited Product and Serives
                        </li>
                        <li>
                            <ion-icon name="checkmark-sharp"></ion-icon> Customer Review and Rating
                        </li>
                    </ul>

                </div>
            </div>

            <div class="w-3/5 bg-white p-4">
                <!-- Content for the second column (60%) -->

                <h2 class='heading-h1 font-semibold text-black font-semibold text-black mb-5 mt-0 text-underline'>Create Your Business</h2>
                <form class="needs-validation data-form" action="{{route('business.store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-5">

                        @if(isset($cid))
                            <input type="hidden" name="cid" value="{{$cid}}">
                        @endif

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                            <input type="text" 
                                name="name" placeholder="Business name" 
                                class="w-full" @if(isset($business) && $business->name) 
                                    value="{{ $business->name }}" 
                                @endif
                            >

                            </div>
                        </div>


                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                    
                                <input type="text" 
                                    name="building" placeholder="Building / Apartment Name" 
                                    class="w-full" @if(isset($business) && $business->building) 
                                        value="{{ $business->building }}" 
                                    @endif
                                >

                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                               
                                <input type="text" 
                                    name="street" placeholder="Street / Lane" 
                                    class="w-full" @if(isset($business) && $business->street) 
                                        value="{{ $business->street }}" 
                                    @endif
                                >

                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                          
                                <input type="text" 
                                    name="pincode" placeholder="Pincode" 
                                    class="w-full" @if(isset($business) && $business->pincode) 
                                        value="{{ $business->pincode }}" 
                                    @endif
                                >

                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex-1 max-md:mt-4">
                                <select class="!rounded-md w-full text-capitalize" name="city">
                                    <option value="">Select City</option>
                                    @foreach(getGujaratCities() as $city)
                                    <option value="{{$city->name}}" @if($city->name == 'vadodara') selected
                                        @endif>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-1 max-md:mt-4">
                                <select class="!rounded-md w-full text-capitalize" name="state">
                                    <option value="">Select State</option>
                                    @foreach(getStates() as $state)
                                    <option value="{{$state->name}}" @if($state->name == 'Gujarat') selected
                                        @endif>{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="md:flex items-start gap-10 " hidden="">
                            <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt="" name="image"
                                    class="w-10 h-10 rounded-full">
                                <button type="submit"
                                    class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                    Change</button>
                            </div>
                        </div>

                    </div>

                    <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                        
                    @if(isset($cid))
                        <a class="btn-md button lg:px-10 bg-secondery max-md:flex-1"
                                href="{{route('businessList',['cid' => $cid])}}"
                            > Back</a>
                    @endif
                       
                        <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                            & Continue <span class="ripple-overlay"></span></button>
                    
                    </div>
                </form>
            </div>
        </div>


    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection