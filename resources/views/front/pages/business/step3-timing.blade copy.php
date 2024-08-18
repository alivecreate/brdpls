@extends('front.layout.landing-layout')

@section('content')


        <!-- main contents -->
        <main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">


    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto">
        <div class="2xl:w-[380px] lg:w-[330px] w-full">
            <!-- Content for the first column (40%) -->
            <img src="https://www.justdial.com/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_detail_2x_new.png&w=1920&q=75" alt="">
        </div>

        <div class="2xl:w-[380px] lg:w-[330px] w-full">
            <!-- Content for the second column (60%) -->
             
            
<div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
  <div class="bg-blue-600 h-1 rounded-full" style="width: 25%"></div>
</div>

            <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0'>Business timing</p>
            
            <p class='mb-4'>Business Opening and Closing Time</p>
            
                        <form class="needs-validation data-form" action="http://localhost:8000/users/2" method="POST" enctype="multipart/form-data">


                            <div class="container mx-auto">
        <p class="font-bold mb-4">Select the Days</p>
        <div id="business-hours">
        <span class="w-24">Monday</span>
        <select class="dropdown color111 customscroll">
            @foreach(getTimeOptions() as $time)
            <option value="{{$time}}">{{$time}}</option>
            @endforeach
</select>

<span class="mx-2">to</span>

<select class="dropdown color111 customscroll">
            @foreach(getTimeOptions() as $time)
            <option value="{{$time}}">{{$time}}</option>
            @endforeach
</select>

            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        <div id="business-hours">
        <span class="w-24">Tuesday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        <div id="business-hours">
        <span class="w-24">Wednesday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        <div id="business-hours">
        <span class="w-24">Thursday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        <div id="business-hours">
        <span class="w-24">Friday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        
        <div id="business-hours">
        <span class="w-24">Saturday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
        
        <div id="business-hours">
        <span class="w-24">Sunday</span>
            <div class="flex items-center mb-2">
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <span class="mx-2">to</span>
                <input type="time" class="time-input p-2 border border-gray-300 rounded">
                <button type="button" class="ml-2 text-blue-500 add-hours" onclick="addHours(this)">Add</button>
            </div>
        </div>

        
    </div>



                        
                            <input type="hidden" name="_token" value="Zl5boaJsMQjWyBh9pX5veDO4nWorFUvyp6eBoiTD" autocomplete="off">         
                                       <input type="hidden" name="_method" value="put">
                                                <div class="space-y-5">


                            <div class="md:flex items-start gap-10 " hidden="">
                                <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                    <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt="" name="image" class="w-10 h-10 rounded-full">
                                    <button type="submit" class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white"> Change</button>
                                </div>
                            </div>
                        </div>

                        <div class="flex w-full items-center gap-4 mt-6">
                            <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save & Continue <span class="ripple-overlay"></span></button>
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
