@extends('front.layout.landing-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="w-full py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
                 
    <div class='business-info-b text-center'>
        <h2 class="font-semibold">Create Business <span>(Step 3)</span></h2>
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
        <div class="step active">
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
            <div class="2xl:w-[500px] lg:w-[500px] w-full">
            <div class='business-info-b'>
                    <h1 class="heading-h1 font-semibold">List Unlimited Business in <span
                        class="text-danger text-right">just ₹365 / Year</span></h1>
                    <h2>Business Opening and Closing Time</h2>

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

            <div class="2xl:w-[500px] lg:w-[500px] w-full bg-white p-4">
                
                <p class='heading-h1 font-semibold page-title text-underline'>Business Timing</p>

                <form class="needs-validation data-form" action="{{route('storeBusinessTimining')}}" method="POST"
                    enctype="multipart/form-data">

                    <input type="hidden" name="cid" value="{{$cid}}">
                    @csrf
                    <div class="container mx-auto">
                        
                        @foreach(getDays() as $day)

        <div id="business-hours" class="flex items-center mb-4">
            <span class="w-24">{{ $day }}</span>
            <select name="business_hours[{{ $day }}][open]" class="business_hours dropdown-timining">
                <option value="">Closed</option>
                @foreach(getTimeOptions() as $time)
                <option value="{{ $time }}" @if($time == '10:00 AM') selected @endif>{{ $time }}</option>
                @endforeach
            </select>

            <span class="mx-2">to</span>

            <select name="business_hours[{{ $day }}][close]" class="dropdown-timining">
                <option value="">-</option>
                @foreach(getTimeOptions() as $time)
                <option value="{{ $time }}"  @if($time == '08:00 PM') selected @endif>{{ $time }}</option>
                @endforeach
            </select>
        </div>
        
        @if($day == 'Monday') 
        <div class='flex'>
        <button type="button" class="rounded mr-2" id="set-default-times"><span class='text-orange'>Set all time same</span></button>
        </div>
        @endif
        @endforeach


                    </div>

                    

                    <div class="flex w-full items-center gap-4 mt-6">
                        <a class="btn-md button lg:px-10 bg-secondery max-md:flex-1"
                            href="{{route('step2ContactDetail',['cid' => $cid])}}"
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