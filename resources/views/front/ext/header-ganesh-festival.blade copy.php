<!-- header -->



        
<header
    class="z-[100] header-topbar w-full md:w-auto fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

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

                    <ul class="uk-slider-items grid-small "
                        uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-right-small; delay: 20 ;repeat: true"
                        style="transform: translate3d(0px, 0px, 0px);">

                      


                        @if(!isGroupExists() && isHomeCompetitionExists()->competition_type == 3)
                        <li class="custom-nav-menu-wrap" tabindex="-1" style="">
                            <a href="{{route('ganeshFestivalCompetition.create')}}"
                                class="custom-nav-menu p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4">
                                <ion-icon name="trophy" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="trophy"></ion-icon>
                                <div class="text-sm font-medium text-capitalize font-semibold"> ઘરની બેસ્ટ મૂર્તિ
                                </div>
                            </a>
                        </li>
                        
                        @elseif(isGroupExists())
                        <li class="custom-nav-menu-wrap" uk-scrollspy-class="uk-animation-fade" tabindex="-1" style="">
                            <a href="{{route('ganeshFestivalGroup.create')}}"
                                class="custom-nav-menu p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 dark:text-white dark:bg-dark4">
                                <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="book"></ion-icon>
                                @if(isGroupExists())
                                
                                <div class="text-sm font-medium text-capitalize font-semibold"> ગણેશ મંડળની વિગત </div>

                                @else

                                <div class="text-sm font-medium text-capitalize font-semibold"> ગણેશ મંડળનું રજીસ્ટ્રેશન
                                </div>

                                @endif
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

<div class="lg:hidden">
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