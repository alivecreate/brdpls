@extends('front.layout.landing-layout')

@section('content')

   <main id="site__main" class="w-full 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

<div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

    <div class="flex-1 mt-4">

        <div class="w-full">
    <div class="sm:my-6 my-3 flex items-center justify-between lg:mt-10">
        <div>
            <h2 class="md:text-lg text-base font-semibold text-black"> Showing Results for "{{$slug}}" in Vaodara</h2>
            <p class="font-normal text-sm text-gray-500 leading-6"> Find a groups You Might Be Interested In. </p>
        </div>
        <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
    </div>

    
    <div class="grid md:grid-cols-1 md:gap-2 gap-3">
       @foreach($businesses as $business) 
    <div class="flex md:items-center space-x-4 p-4 rounded-md box mb-4">
            <div class="sm:w-400 w-200 flex-shrink-0 rounded-lg relative"> 
                <div class="relative uk-visible-toggle sm:px-4" tabindex="-1" uk-slideshow="animation: push;ratio: 4:3">
                    <ul class="uk-slideshow-items overflow-hidden rounded-xl" uk-lightbox="animation: fade"> 
                    @foreach($business->gallery as $gallery)    
                    <li class="w-full">
                            <a class="inline" href="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$gallery->image}}/md" data-caption="Caption 1"> 
                                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$gallery->image}}/md" alt="" class="w-full h-full absolute object-cover insta-0">
                            </a>
                        </li>
                        @endforeach

                    </ul>
                    
                    <a class="nav-prev left-6" href="#" uk-slideshow-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                    <a class="nav-next right-6" href="#" uk-slideshow-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                
                </div>
            </div> 
            <div class="flex-1">
                <a href="#" class="md:text-lg capitalize biz-list-title"> {{$business->name}}   </a>
                <div class="flex space-x-2 items-center text-sm font-normal">
                    <div class="biz-list-location"><ion-icon class="icon" name="location-outline"></ion-icon> <span>{{$business->landmark}}, {{$business->city}}</span></div>
                </div>

            
                @foreach($business->categoryNames as $categoryName)
                <span class="bg-blue-500 text-xs light-badge rounded biz-list-category">{{$categoryName->name}}</span>
                @endforeach

                <div class="flex items-center mt-2">
                    <a href="tel:{{$business->phone1}}" class='bg-primary flex items-center gap-0.5 py-1 px-2 bg-primary text-white shadow rounded-md mr-2'><ion-icon name="call"></ion-icon> {{$business->phone1}}</a>
                    <a 
                    href="https://api.whatsapp.com/send?phone=91{{$business->whatsapp1}}&text=*Hello%20{{$business->name}}-%20I%20Am%20Interested%20in%20Your%20Services.*"
                    class='btn-whatsapp flex items-center gap-0.5 py-1 px-2 bg-primary text-white shadow rounded-md mr-2'><ion-icon name="logo-whatsapp"></ion-icon> Whatsapp</a>
                    
                </div>

            </div>
        </div>

        @endforeach
    

    </div>

        
        
        </div>


    </div>

    <!-- sidebar -->
    <div class="2xl:w-[380px] lg:w-[330px] w-full">

        <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
              uk-sticky="media: 1024; end: #js-oversized; offset: 80">
              
            <div class="box p-5 px-6">

                <div class="flex items-baseline justify-between text-black dark:text-white">
                    <h3 class="font-bold text-base"> Pages You Manage </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>
            
                <div class="side-list">
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 2 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 4 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Jesse Steeve</h4></a>
                            <div class="side-list-info"> Updated 2 month ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                     
                </div>

            </div>

            <!-- Groups You Manage  -->
            <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                            
                <div class="flex items-baseline justify-between text-black dark:text-white">
                    <h3 class="font-bold text-base"> pages you manage </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>

                <div class="side-list">

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 6 day ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 2 month ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Jesse Steeve</h4></a>
                            <div class="side-list-info"> Updated 2 day ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                     
                </div>

                <button class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm mt-3 dark:text-white">See all</button>

            </div>

            <!-- Groups You Manage  -->
            <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                            
                <div class="flex items-baseline justify-between text-black dark:text-white">
                    <h3 class="font-bold text-base"> Suggested pages </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>

                <div class="side-list">

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-primary text-white">Like</button>
                    </div>
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 4 week ago </div>
                        </div>
                        <button class="button bg-primary text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 2 month ago </div>
                        </div>
                        <button class="button bg-primary text-white">Like</button>
                    </div>  
                   
                     
                </div>

            </div>

        </div> 

    </div>

</div>

</main>

</div>

@endsection




