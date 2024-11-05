@extends('front.layout.landing-layout')

@section('content')

<!-- main contents -->
<main id="site__main" class="mt-0 h-[calc(100vh-var(--m-top))] mt-[--m-top]">


    <div class="w-full md:w-auto md:px-20">




        <nav class="flex text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        vadodara
                    </a>
                </li>

                <li class="inline-flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    {{$businessDetail->name}}
                </li>

            </ol>
        </nav>

        <div class='rounded w-full py-4 px-6 border-2 mt-6  grid lg:grid-cols-2 sm:grid-cols-1 gap-5 mt-4'>
            
           

            <div class="md:w-full">
           
            <div class='flex'>
            <div class="">
                @if($businessDetail->logo)
                    <img class="w-10 h-10 rounded-full shadow cover"
                    src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$businessDetail->logo}}/xs"
                    alt="{{$businessDetail->logo}}" />
                @else
                <img class="w-10 h-10 rounded-full shadow cover"
                    src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="Profile Picture" />
                @endif
            </div>
            
                <h1 class="heading-3 poppins-bold">{{$businessDetail->name}}</h1>
                <nav class="mt-0 mb-5">
                    <div uk-tab
                        class="flex gap-3  flex-wrap align-items-center text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"
                        uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                        <p class="flex align-items-center">
                            <ion-icon class="text-xl mr-1" name="location"></ion-icon>
                            {{$businessDetail->street}}
                        </p>
                        <ion-icon class="elips-saprator" name="ellipse"></ion-icon>
                        <p>
                            Experience: {{$businessExperience}} Years, (EST: {{$businessDetail->establishment_year}})
                        </p>

                         
           

                    </div>

                </nav>
                </div>  


                <nav class="my-3">
                    <ul uk-tab
                        class="flex gap-3  flex-wrap text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"
                        uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                        <li>
                            <a href="#"
                                class="inline-flex lg:text-xl text-md items-center gap-2 py-2 px-2.5 pr-3 bg-green rounded-full aria-expanded:bg-green aria-expanded:text-white aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                <ion-icon class="text-xl text-white" name="call"></ion-icon>
                                Call Now
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-flex lg:text-xl text-md items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                <ion-icon class="text-xl text-green" name="logo-whatsapp"></ion-icon>
                                Whatsapp
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="inline-flex text-xl items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                <ion-icon class="text-xl" name="arrow-redo"></ion-icon>
                                Share
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="flex-right lg-right">
         
                <nav class="my-3">
                    <p class='lg-text-right'>review and rating</p>
                    <ul uk-tab id="rating-stars"
                        class="flex lg-right gap-3 mt-3 rating-star flex-wrap text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"
                        uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                        <li  data-star="1"> <ion-icon class='text-size2' name="star-outline"></ion-icon></li>
                        <li  data-star="2"> <ion-icon class='text-size2' name="star-outline"></ion-icon></li>
                        <li  data-star="3"> <ion-icon class='text-size2' name="star-outline"></ion-icon></li>
                        <li  data-star="4"> <ion-icon class='text-size2' name="star-outline"></ion-icon></li>
                        <li  data-star="5"> <ion-icon class='text-size2' name="star-outline"></ion-icon></li>
                    </ul>
                </nav>
            </div>

        </div>


        

    </div>



    
    @include('front.pages.business.contents.detail')

    @include('front.ext.footer')

</main>




@endsection