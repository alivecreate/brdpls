@extends('front.layout.landing-layout')

@section('content')


<!-- main contents -->
<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10" id="js-oversized">


        <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto">
            <div class="2xl:w-[380px] lg:w-[330px] w-full">
                <!-- Content for the first column (40%) -->
                <img src="https://www.justdial.com/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_detail_2x_new.png&w=1920&q=75"
                    alt="">
            </div>

            <div class="2xl:w-[380px] lg:w-[330px] w-full">
                <!-- Content for the second column (60%) -->


                <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1 rounded-full" style="width: 25%"></div>
                </div>

                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Add Contact Details</p>
                <form class="needs-validation data-form" action="{{route('storeStep2ContactDetail')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-5">
                        <input type="hidden" name="cid" value="{{$cid}}">
                        <div class="md:flex items-center gap-10">
                            <div class="flex flex-1 max-md:mt-4">

                                <select class="form-title float-left" name="title">
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