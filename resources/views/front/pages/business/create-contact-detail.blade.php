@extends('front.layout.landing-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="w-full py-4 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
                       
<div class='business-info-b text-center'>
    <h2 class="font-semibold">Create Business <span>(Step 2)</span></h2>
</div>




<div class="stepper">
        <div class="step active">
            <div class="step-circle  bg-danger">1</div>
            <div class="step-bar"></div>
            <div class="step-text">Create Business</div>
        </div>
        <div class="step active">
            <div class="step-circle">2</div>
            <div class="step-bar"></div>
            <div class="step-text">Contact Details</div>
        </div>
        <div class="step">
            <div class="step-circle">3</div>
            <div class="step-bar"></div>
            <div class="step-text">Timing</div>
        </div>
        <div class="step">
            <div class="step-circle">4</div>
            <div class="step-text">Categories</div>
        </div>
    </div>



<div class="lg:flex mx-auto lg:mt-2 mt-6 " id="js-oversized">
        <div class="lg:flex mx-auto lg:mt-2 mt-6 gap-12">
            <div class="2xl:w-[600px] lg:w-[600px] w-full">     <!-- Content for the first column (40%) -->
                <div class='business-info-b'>
                    <h1 class="heading-h1 font-semibold">Just 2 Steps Away to Creating <span
                    class="text-danger text-right">Your Business </span></h1>
                    <h2>Baroda's Own Business Platform</h2>
                </div>
            </div>
            
            <div class="w-3/5 bg-white p-4">
            

                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Contact Details</p>
                <form class="needs-validation data-form" action="{{route('storeStep2ContactDetail')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-5">
                        <input type="hidden" name="cid" value="{{$cid}}">
                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4">

                                <select class="form-title float-left" name="name_prefix">
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>

                                </select>

                                <input type="text" name="contact_person" placeholder="Contact Person Name"
                                    value="@if($business->contact_person){{$business->contact_person}}@endif"
                                    class="flex-auto float-left">
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="phone1"
                                    value="@if($business->phone1){{$business->phone1}}@endif"
                                    placeholder="Mobile No" class="flex-auto float-left">
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="whatsapp1"
                                    value="@if($business->whatsapp1){{$business->whatsapp1}}@endif"
                                    placeholder="Whatsapp" class="flex-auto float-left">
                            </div>
                        </div>


                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="email" name="email1"
                                    value="@if($business->email1){{$business->email1}}@endif"
                                    placeholder="Email Address" class="flex-auto float-left">
                            </div>
                        </div>


                    </div>

                    <div class="flex w-full items-center gap-4 mt-6">
                        <a class="btn-md button lg:px-10 bg-secondery max-md:flex-1"
                            href="{{route('businessList',['cid' => $cid])}}"
                        > Back</a>
                        
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