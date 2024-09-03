
    
   <header class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

<div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">

        <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">

            <!-- left -->
            <div class="flex items-center gap-1">

                <button uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"
                    class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group">
                    <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                    <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
                </button>

                <div id="logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('front/images')}}/logo-barodaplus-light2.png" alt=""
                            class="main-logo md:block hidden dark:!hidden">
                        <img src="{{asset('front/images')}}/logo-barodaplus-dark22.png" alt=""
                            class="main-logo dark:md:block hidden">
                        <img src="{{asset('front/images')}}/logo-barodaplus-light2.png"
                            class="main-logo hidden max-md:block w-20 dark:!hidden" alt="">
                        <img src="{{asset('front/images')}}/logo-barodaplus-dark22.png"
                            class="main-logo hidden dark:max-md:block w-20" alt="">
                            
                    </a>
                </div>

            </div>

        </div>
        <div class="flex-1 relative">
            <div class="max-w-[1220px] mx-auto flex-justify-space-around">
                <div class=" hidden lg:block">

                    <ul class="uk-slider-items grid-small"
                        uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-right-small; delay: 20 ;repeat: true"
                        style="transform: translate3d(0px, 0px, 0px);">

                        <li class="custom-nav-menu-wrap" uk-scrollspy-class="uk-animation-fade" tabindex="-1" style="">
                            
                        @if(isGroupExists()  && !isHomeCompetitionExists())
        <a href="{{route('ganeshCompetitionPaymentCreate', ['type' => 'group'])}}" 
            class="flex-inline p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 font-semibold dark:text-white dark:bg-dark4">
                                    <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="book"></ion-icon> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન</a>
        @else
        <a href="{{route('ganeshFestivalCompetition.create')}}" 
            class="flex-inline p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 font-semibold dark:text-white dark:bg-dark4"> 
                                    <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="book"></ion-icon> ગણેશ મંડળનું રજીસ્ટ્રેશન</a>
       
        @endif
                        </li>

                        @if(!isGroupExists() && !isHomeCompetitionExists())
                        <li class="custom-nav-menu-wrap" tabindex="-1" style="">
                            <a href="{{route('ganeshFestivalCompetition.create')}}"
                                class="custom-nav-menu p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4">
                                <ion-icon name="trophy" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="trophy"></ion-icon>
                                <div class="text-sm font-medium text-capitalize font-semibold"> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન
                                </div>
                            </a>
                        </li>
                        @endif

                        <li class="custom-nav-menu-wrap " tabindex="-1" style="">
                            <a href="{{route('GaneshFestivalCompetitionRules')}}"
                                class="custom-nav-menu p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 dark:text-white dark:bg-dark4">
                                <ion-icon name="newspaper-outline" class="text-2xl drop-shadow-md md hydrated mr-2"
                                    role="img" aria-label="videocam"></ion-icon>
                                <div class="text-sm font-medium text-capitalize font-semibold"> સ્પર્ધાના નિયમો </div>

                            </a>
                        </li>

                    </ul>
                </div>

                @if(Auth::check())

                <div class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">

                   
                    <div class="rounded-full relative flex-center cursor-pointer shrink-0">
                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                            class="sm:w-9 sm:h-9 w-7 h-7 rounded-full shadow shrink-0">

                    </div>
                    <div class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                        uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                

                        <a href="#">
                            <div class="p-4 py-5 flex items-center gap-4">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 h-10 rounded-full shadow">
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-black">@if(getUserData()){{getUserData()['first_name']}} {{getUserData()['last_name']}}@endif</h4>
                                    <div class="text-sm mt-1 text-blue-600 font-light dark:text-white/70">@if(getUserData()){{getUserData()['phone']}}@endif</div>
                                </div>
                            </div>
                        </a>

                        <hr class="dark:border-gray-600/60">
                        <nav class="p-2 text-sm text-black font-normal dark:text-white">

                            <a href="{{route('setting')}}">
                                <div
                                    class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Settings
                                </div>
                            </a>

                            <hr class="-mx-2 my-2 dark:border-gray-600/60">
                            <a href="{{route('logout')}}">
                                <div
                                    class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Log Out
                                </div>
                            </a>

                        </nav>

                    </div>

                    <div class="flex items-center gap-2 hidden">

                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                            class="w-9 h-9 rounded-full shadow">

                        <div class="w-20 font-semibold text-gray-600"> Hamse </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>

                @else
                <a href="{{route('login')}}"
                    class="button items-center gap-2 bg-primary text-white text-sm uk-scrollspy-inview px-4">
                    <ion-icon name="log-in-outline" style="height: 27px;width: 27px;"></ion-icon> Login Now
                </a>
                @endif

            </div>

        </div>

    </div>

</header>

<div class="lg:block hidden">
    <ul class="uk-slider-items grid-small "
        uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-right-small; delay: 20 ;repeat: true"
        style="transform: translate3d(0px, 0px, 0px);">
        <li class="custom-nav-menu-wrap" uk-scrollspy-class="uk-animation-fade" tabindex="-1" style="">

            <a href="{{route('ganeshFestivalGroup.create')}}"
                class="custom-nav-menu p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 dark:text-white dark:bg-dark4">
                <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img" aria-label="book">
                </ion-icon>
                <div class="text-sm font-medium text-capitalize"> Mandal Registration </div>
            </a>
        </li>

        <li class="custom-nav-menu-wrap" tabindex="-1" style="">
            <a href="{{route('ganeshFestivalCompetition.create')}}"
                class="custom-nav-menu p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4">
                <ion-icon name="trophy" class="text-2xl drop-shadow-md md hydrated mr-2" role="img" aria-label="trophy">
                </ion-icon>
                <div class="text-sm font-medium text-capitalize"> Competition Registration </div>
            </a>
        </li>
        <li class="custom-nav-menu-wrap " tabindex="-1" style="">
            <a href="{{route('ganeshFestivalGroup.create')}}"
                class="custom-nav-menu p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 dark:text-white dark:bg-dark4">
                <ion-icon name="home" class="text-2xl drop-shadow-md md hydrated mr-2" role="img" aria-label="videocam">
                </ion-icon>
                <div class="text-sm font-medium text-capitalize"> Best Home Ganesh </div>
            </a>
        </li>

    </ul>
</div>

