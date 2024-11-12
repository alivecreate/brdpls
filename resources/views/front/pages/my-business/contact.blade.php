@extends('front.layout.my-business-layout')

@section('meta')
<meta name="business-id" content="{{$myBusiness->id}}">
<meta name="user-id" content="{{Auth::id()}}">
@endsection


@section('custom-script')

<script>
$(document).ready(function() {
    $('.mybusiness').addClass('active');

    $('#{{$myBusiness->id}}').addClass('link-active');

    $('.uk-parent').addClass('uk-open');
    $('.uk-parent ul').removeAttr('hidden');

    $('.my-b-contact a').addClass('uk-active-tab');
});
</script>

@endsection



@section('content')


<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-20">
    <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[828px] mx-auto mt-10 container-w" id="js-oversized">

        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <li class="inline-flex items-center">
                    <a href="{{route('myBusiness')}}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        My Business
                    </a>
                </li>

                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        {{$myBusiness->name}}
                    </a>
                </li>
            </ol>
        </nav>


        <div class="2xl:gap-12 gap-10 2xl:max-w-[1220px] mx-auto bg-white">


            @include('front.pages.my-business.page-tab')


            <div id="setting_tab" class="uk-switcher md:py-6 p-6 overflow-hidden text-black text-sm">
                <div class='uk-active' id="contact">

                <div>
                    <div class="w-full">

                        <p class='heading-h1 font-semibold text-black font-semibold text-black mb-5'>Contact Details</p>
                        <form class="needs-validation data-form"
                            action="{{route('updateMyBusinessContact', $myBusiness->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="space-y-5">
                                <input type="hidden" name="cid" value="{{$myBusiness->cid}}">
                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4">

                                        <select class="form-title float-left" name="title">
                                            @foreach(getContactTitles() as $title)
                                            <option value="{{$title}}" @if($title==$myBusiness->title) selected
                                                @endif>{{$title}}</option>
                                            @endforeach

                                        </select>

                                        <input type="text" name="contact_person" placeholder="Contact Person Name"
                                            value="@if($myBusiness->contact_person){{$myBusiness->contact_person}}@endif"
                                            class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Mobile Number:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone1"
                                            value="@if($myBusiness->phone1){{$myBusiness->phone1}}@endif"
                                            placeholder="Primary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="phone2"
                                            value="@if($myBusiness->phone2){{$myBusiness->phone2}}@endif"
                                            placeholder="Secondary Mobile No" class="flex-auto float-left">
                                    </div>
                                </div>

                                <p>Whatsapp Number:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" class="form-title float-left" disabled value="+91">
                                        <input type="number" name="whatsapp1"
                                            value="@if($myBusiness->whatsapp1){{$myBusiness->whatsapp1}}@endif"
                                            placeholder="Primary Whatsapp" class="flex-auto float-left">
                                    </div>
                                </div>


                                <p>Email Accounts:</p>

                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="email" name="email1"
                                            value="@if($myBusiness->email1){{$myBusiness->email1}}@endif"
                                            placeholder="Primary Email" class="flex-auto float-left">
                                    </div>
                                </div>


                                <p>Business Website:</p>
                                <div class="md:flex items-center gap-10">
                                    <div class="flex flex-1 max-md:mt-4 form-group">
                                        <input type="text" name="website"
                                            value="@if($myBusiness->website){{$myBusiness->website}}@endif"
                                            placeholder="www.yourwebsite.com" class="flex-auto float-left">
                                    </div>
                                </div>



                                <div class="md:flex items-start gap-10 " hidden="">
                                    <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                        <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt=""
                                            name="image" class="w-10 h-10 rounded-full">
                                        <button type="submit"
                                            class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                            Change</button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex w-full items-center gap-4 mt-6">
                                <button type="submit"
                                    class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                                    & Continue <span class="ripple-overlay"></span></button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection