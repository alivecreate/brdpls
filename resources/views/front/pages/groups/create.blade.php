@extends('front.layout.ganesh-festival-layout')

@section('content')


        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">
        <div class="2xl:w-[380px] lg:w-[330px] w-full hidden lg:block">
            <!-- Content for the first column (40%) -->
            <img src="https://www.justdial.com/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_detail_2x_new.png&w=1920&q=75" alt="">
        </div>

        <div class="w-3/5 bg-gray-300 p-4">
            <!-- Content for the second column (60%) -->
             
<div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
  <div class="bg-blue-600 h-1 rounded-full" style="width: 10%"></div>
</div>


            <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0'>Group Registration</p>
            <p class="mb-3 subheading-h2">ગણેશ મંડળ અને યુવક મંડળનું રજિસ્ટ્રેશન</p>
                        <form class="needs-validation data-form" action="{{route('business.store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="space-y-5">

                        <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="name" placeholder="Group Name"  class="w-full">
                                </div>
                            </div>


                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="building" placeholder="Address" class="w-full">
                                </div>
                            </div>

                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="landmark" placeholder="Landmark" class="w-full">
                                </div>
                            </div>
                            

                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="pincode" placeholder="Pincode" class="w-full">
                                </div>
                            </div>

                            <div class="md:flex items-center gap-10">
                                <div class="flex-1 max-md:mt-4">
                                    <select class="!rounded-md w-full text-capitalize" name="city" >
                                    <option value="">Select City</option>
                                        @foreach(getGujaratCities() as $city)
                                           <option value="{{$city->name}}" @if($city->name == 'vadodara') selected @endif>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex-1 max-md:mt-4">
                                    <select class="!rounded-md w-full text-capitalize" name="state" >
                                    <option value="">Select State</option>
                                        @foreach(getStates() as $state)
                                           <option value="{{$state->name}}"  @if($state->name == 'gujarat') selected @endif>{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="md:flex items-start gap-10 " hidden="">
                                <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                    <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt="" name="image" class="w-10 h-10 rounded-full">
                                    <button type="submit" class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white"> Change</button>
                                </div>
                            </div>

                        </div>

                        <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                            <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1"> Cancel</button>
                            <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Next <span class="ripple-overlay"></span></button>
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
