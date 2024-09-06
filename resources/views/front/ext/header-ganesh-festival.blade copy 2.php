
    
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
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt=""
                            class="main-logo md:block hidden dark:!hidden">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt=""
                            class="main-logo dark:md:block hidden">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png"
                            class="main-logo hidden max-md:block w-20 dark:!hidden" alt="">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png"
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
                    
                <div  class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                    uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                    
                    <a href="{{route('timeline')}}">
                        <div class="p-4 py-5 flex items-center gap-4">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 h-10 rounded-full shadow">
                           
                        </div>
                    </a>

                    <hr class="dark:border-gray-600/60">

                    <nav class="p-2 text-sm text-black font-normal dark:text-white">
                        <a href="{{route('upgrade')}}">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                                Upgrade To Premium 
                            </div>
                        </a>  
                        <a href="{{route('setting')}}">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                </svg>
                                My Billing 
                            </div>
                        </a>
                        <a href="{{route('setting')}}">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                Advatacing
                            </div>
                        </a>
                        <a href="{{route('setting')}}">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                My Account
                            </div>
                        </a>
                        <button type="button" class="w-full">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                </svg>
                                Night mode
                                <span class="bg-slate-200/40 ml-auto p-0.5 rounded-full w-9 dark:hover:bg-white/20">
                                    <span class="bg-white block h-4 relative rounded-full shadow-md w-2 w-4 dark:bg-blue-600"></span>
                                </span>
                            </div>
                        </button>   
                        <hr class="-mx-2 my-2 dark:border-gray-600/60">
                        <a href="{{route('login')}}">
                            <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Log Out 
                            </div>
                        </a>

                    </nav>

                </div> 

                
                    <div class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                        uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                        <a href="#">
                            <div class="p-4 py-5 flex items-center gap-4">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt=""
                                    class="w-10 h-10 rounded-full shadow">
                                @if(getUserData()){{getUserData()['first_name']}} {{getUserData()['last_name']}}@endif
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

