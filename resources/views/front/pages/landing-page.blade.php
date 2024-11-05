@extends('front.layout.landing-layout')

@section('content')

<!-- main contents -->
<main id="site__main" class="py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">


    <div class="w-full md:w-auto md:px-20">


        <div>
            <h2 class="page-title text-center">Search Local Business</h2>
        </div>
        <div class="text-center flex" style="
    justify-content: center;
">
            <!-- search -->
            <div id="search--box"
                class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                <input type="text" placeholder="Search Friends, videos .."
                    class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm no-border">
            </div>

            <!-- search dropdown-->
            <div class="hidden uk- open z-10"
                uk-drop="pos: bottom-center ; animation: uk-animation-slide-bottom-small;mode:click ">

                <div class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                    <div class="flex justify-around px-2 py-2.5 text-sm font-medium">
                        <div class=" text-black dark:text-white">Recent</div>
                        <button type="button" class="text-blue-500">Clear</button>
                    </div>
                    <nav class="text-sm font-medium text-black dark:text-white">
                        <a href="#"
                            class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full">
                            <div>
                                <div> Jesse Steeve </div>
                                <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                            </div>
                            <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 ">
                            </ion-icon>
                        </a>
                        <a href="#"
                            class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full">
                            <div>
                                <div> Martin Gray </div>
                                <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                            </div>
                            <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 ">
                            </ion-icon>
                        </a>
                        <a href="#"
                            class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <img src="{{asset('front')}}/images/group/group-2.jpg" class="w-9 h-9 rounded-full">
                            <div>
                                <div> Delicious Foods </div>
                                <div class="text-xs text-rose-500 font-medium mt-0.5"> Group </div>
                            </div>
                            <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 ">
                            </ion-icon>
                        </a>
                        <a href="#"
                            class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <img src="{{asset('front')}}/images/group/group-1.jpg" class="w-9 h-9 rounded-full">
                            <div>
                                <div> Delicious Foods </div>
                                <div class="text-xs text-yellow-500 font-medium mt-0.5"> Page </div>
                            </div>
                            <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 ">
                            </ion-icon>
                        </a>
                        <a href="#"
                            class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" class="w-9 h-9 rounded-full">
                            <div>
                                <div> John Welim </div>
                                <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                            </div>
                            <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 ">
                            </ion-icon>
                        </a>
                        <a href="#"
                            class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <ion-icon class="text-2xl" name="search-outline"></ion-icon> Creative ideas about Business
                        </a>
                        <a href="#"
                            class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                            <ion-icon class="text-2xl" name="search-outline"></ion-icon> 8 Facts About Writting
                        </a>
                    </nav>
                    <hr class="-mx-2 mt-2 hidden">
                    <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden">
                        <a href="#" class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded">
                            <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your history
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div class="sm:my-6 my-3 flex items-center justify-between md:mt-10">
            <div>
                <h2 class="text-md font-semibold"> Popular Categories </h2>
                <p class="font-normal text-sm text-gray-500 leading-6"> Find a group by browsing top categories. </p>
            </div>
            <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
        </div>

        <!-- listing  slider -->
        <div class="mt-4" tabindex="-1" uk-slider="finite:true">

            <div class="uk-slider-container pb-1">

                <ul class="uk-slider-items grid-small">

                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-1.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> Miami </div>
                                        <div class="text-lg leading-3 mt-1.5"> Hotels </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-2.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> Florida </div>
                                        <div class="text-lg leading-3 mt-1.5"> Hotels </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-3.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> London </div>
                                        <div class="text-lg leading-3 mt-1.5"> Hotels </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-4.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> Dubai </div>
                                        <div class="text-lg leading-3 mt-1.5"> Hotels </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-5.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> Turkey </div>
                                        <div class="text-lg leading-3 mt-1.5"> Resturent </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="md:w-1/5 sm:w-1/3 w-1/2">
                        <a href="#">
                            <div class="relative rounded-lg overflow-hidden">
                                <img src="{{asset('front')}}/images/events/listing-1.jpg" alt=""
                                    class="h-36 w-full object-cover">
                                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                    <div class="text-white p-5">
                                        <div class="text-sm font-light"> Miami </div>
                                        <div class="text-lg leading-3 mt-1.5"> Hotels </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

            <!-- slide nav icons -->
            <a class="nav-prev" href="#" uk-slider-item="previous">
                <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
            </a>
            <a class="nav-next" href="#" uk-slider-item="next">
                <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
            </a>

        </div>



        <div class="flex items-center justify-between text-black dark:text-white py-3 mt-6">
            <h3 class="text-md font-semibold"> Popular Searches </h3>
            <a href="#" class="text-sm text-blue-500">See all</a>
        </div>

        <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-5 mt-4">
            <div class="card">
                <a href="{{route('timeline-event')}}">
                    <div class="card-media h-40">
                        <img src="https://content.jdmagicbox.com/comp/def_content/ncat_id/10420729.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="#">
                        <h2 class="text-md font-semibold text-black my-4 text-center"> Wholesale Saree </h2>
                    </a>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">View</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <a href="{{route('timeline-event')}}">
                    <div class="card-media h-40">
                        <img src="https://static.vecteezy.com/system/resources/previews/006/948/111/large_2x/happy-smile-caucasian-automobile-mechanic-man-checking-car-damage-broken-part-condition-diagnostic-and-repairing-vehicle-at-garage-automotive-motor-technician-maintenance-after-service-concept-free-photo.jpg"
                            alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="#">
                        <h2 class="text-md font-semibold text-black my-4 text-center"> Bike & Car Repairing </h2>
                    </a>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">View</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <a href="{{route('timeline-event')}}">
                    <div class="card-media h-40">
                        <img src="https://content.jdmagicbox.com/comp/def_content/ncat_id/10192623.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="#">
                        <h2 class="text-md font-semibold text-black my-4 text-center"> Real Estate Agents </h2>
                    </a>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">View</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <a href="{{route('timeline-event')}}">
                    <div class="card-media h-40">
                        <img src="https://img.freepik.com/free-photo/young-uber-driver-car-interior_23-2149149653.jpg?t=st=1727526612~exp=1727530212~hmac=732369db1bcbebdf6f3d348e563bd5c9027f3d3c1f335002891a85dcb77e3d09&w=996"
                            alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="#">
                        <h2 class="text-md font-semibold text-black my-4 text-center"> Car Rental </h2>
                    </a>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">View</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <a href="{{route('timeline-event')}}">
                    <div class="card-media h-40">
                        <img src="https://img.freepik.com/free-photo/startup-team-collaborating-project-using-laptops_74855-3308.jpg"
                            alt="">
                        <div class="card-overly"></div>
                    </div>
                </a>
                <div class="card-body">
                    <a href="#">
                        <h2 class="text-md font-semibold text-black my-4 text-center"> Computer Training </h2>
                    </a>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">View</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>



@include('front.widget.status-block')

@include('front.widget.story-block')





@endsection