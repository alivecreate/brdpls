@extends('front.layout.landing-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="w-full py-4 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
                       
<div class='business-info-b text-center'>
    <h2 class="font-semibold">Create Business <span>(Step 2)</span></h2>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Creation Steps</title>
    <style>
        .stepper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
            position: relative;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            z-index: 1;
        }

        .step.active .step-circle {
            background-color: #e11e24;
        }

        .step-bar {
            position: absolute;
            top: 15px; /* Align with the center of the step-circle */
            left: 50%;
            right: -50%;
            height: 2px;
            background-color: #ccc;
            z-index: 0;
        }

        .step.active .step-bar {
            background-color: #e11e24;
        }

        .step-text {
            font-size: 0.9em;
            color: #666;
        }

        .step.active .step-text {
            color: #e11e24;
            font-weight: bold;
        }

        /* Hide last step bar */
        .step:last-child .step-bar {
            display: none;
        }
    </style>
</head>
<body>
    <div class="stepper">
        <div class="step active">
            <div class="step-circle  bg-danger">1</div>
            <div class="step-bar"></div>
            <div class="step-text">Create Business</div>
        </div>
        <div class="step">
            <div class="step-circle">2</div>
            <div class="step-bar"></div>
            <div class="step-text">Contact Details</div>
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
</body>
</html>




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
            

                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Add Contact Details</p>
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

                        <p>Mobile Number:</p>

                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="phone1"
                                    value="@if($business->phone1){{$business->phone1}}@endif"
                                    placeholder="Primary Mobile No" class="flex-auto float-left">
                            </div>
                        </div>

                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="phone2"
                                    value="@if($business->phone2){{$business->phone2}}@endif"
                                    placeholder="Secondary Mobile No" class="flex-auto float-left">
                            </div>
                        </div>

                        <p>Whatsapp Number:</p>


                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="whatsapp1"
                                    value="@if($business->whatsapp1){{$business->whatsapp1}}@endif"
                                    placeholder="Primary Whatsapp" class="flex-auto float-left">
                            </div>
                        </div>



                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="text" class="form-title float-left" disabled value="+91">
                                <input type="number" name="whatsapp2"
                                    value="@if($business->whatsapp2){{$business->whatsapp2}}@endif"
                                    placeholder="Secondary Whatsapp" class="flex-auto float-left">
                            </div>
                        </div>



                        <p>Email Accounts:</p>


                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="email" name="email1"
                                    value="@if($business->email1){{$business->email1}}@endif"
                                    placeholder="Primary Email" class="flex-auto float-left">
                            </div>
                        </div>



                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4 form-group">
                                <input type="email" name="email2"
                                    value="@if($business->email2){{$business->email2}}@endif"
                                    placeholder="Secondary Email" class="flex-auto float-left">
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

                    <div class="flex w-full items-center gap-4 mt-6">
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