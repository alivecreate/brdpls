     <!-- sidebar -->
     <div id="site__sidebar" class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

<!-- sidebar inner -->
<div class="p-2 mt-20 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">

    <div class="pr-4" data-simplebar>
        
        <nav id="side">
        
            <ul>
                <!-- <li id="home">
                    <a href="{{route('ganeshFestivalGroup.index')}}">
                        <img src="{{asset('front')}}/images/icons/home.png" alt="feeds" class="w-6">
                        <span> Home </span> 
                    </a>
                </li> -->

                <li id="ganesh-festival">
                    <a href="{{route('ganeshFestivalGroup.index')}}">
                        <img src="{{asset('front')}}/images/icons/message.png" alt="Ganesh Festival" class="w-5">
                        <span> Ganesh Festival (Groups)</span> 
                    </a>
                </li> 
                
                <li id="ganesh-festival">
                    <a href="{{route('ganeshFestivalGroup.index')}}">
                        <img src="{{asset('front')}}/images/icons/message.png" alt="Ganesh Festival" class="w-5">
                        <span> Home Ganesh List</span> 
                    </a>
                </li> 
                
                @if(Auth::check() && isGroupExists() )
                <li  id="my-group">
                    <a href="{{route('ganeshFestivalGroup.show', isGroupExists()->slug)}}">
                    <img src="{{asset('front')}}/images/icons/group.png" alt="My Group / Mandal" class="w-6">
                        <span> My Mandal </span> 
                    </a>

                </li> 
                @endif

                @if(isHomeCompetitionExists())
                <li  id="my-group">
                

                <a href="{{route('showHome', isHomeCompetitionExists()->id)}}" >
                    <img src="{{asset('front')}}/images/icons/group.png" alt="My Home / Mandal" class="w-6">
                        <span> My Home Ganesh</span> 
                    </a>
                </li> 
                

                @endif


                @if(checkCompetitionSchedule()->status == 'live')
                <li id="live-competition">
                    <a href="{{route('GaneshFestivalCompetitionLive')}}">
                        <img src="{{asset('front')}}/images/icons/video.png" alt="Live Competition" class="w-6">
                        <span>Live Competition </span> 
                    </a>
                </li>
                
                @endif

                @if(Auth::check() && getUserData()->status == 'active')
                    @if(!isGroupExists() && !isHomeCompetitionExists() )

                    <li id="ganesh-festival">
                        <a href="{{route('ganeshFestivalCompetition.create')}}" class='font-semibold'>
                            <img src="{{asset('front')}}/images/icons/message.png" alt="Ganesh Festival" class="w-5">
                            <span> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન</span> 
                        </a>
                    </li> 
                            @endif

                    <li id="ganesh-festival">
                        <a href="{{route('GaneshFestivalCompetitionRules')}}" class='font-semibold'>
                            <img src="{{asset('front')}}/images/icons/message.png" alt="Ganesh Festival" class="w-5">
                            <span> સ્પર્ધાના નિયમો</span> 
                        </a>
                    </li> 

                    @endif
 
                @if(!Auth::check())
                <hr>
                    <li>
                        <a href="{{route('login')}}"> 
                            <ion-icon name="log-in-outline" style="height: 27px;width: 27px;"></ion-icon>
                            <span> Login Now </span>       
                        </a>
                    </li>

                    <li>
                        <a href="{{route('registration')}}"> 
                            <ion-icon name="log-in-outline" style="height: 27px;width: 27px;"></ion-icon>
                            <span> Registration Now </span>       
                        </a>
                    </li>


                    <li>
                        <a href="{{route('registration')}}"> 
                            <ion-icon name="arrow-redo-outline" style="height: 27px;width: 27px;"></ion-icon>
                            <span> Create New Account </span>       
                        </a>
                    </li>
                    @endif
        </ul>
        </nav>

        @if(Auth::check())
        <nav id="side" class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
      
            <ul class="mt-2 -space-y-2" 
                uk-nav="multiple: true">
    
                <li>
                    <a href="{{route('setting')}}"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span> Setting </span>                  
                    </a>
                </li>

                <li>
                    <a href="{{route('logout')}}"> 
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span> Log Out </span>
                    </a>
                </li>

            </ul>
        </nav>
        @endif

        <div class="text-xs font-medium flex flex-wrap gap-2 gap-y-0.5 p-2 mt-2 sidebar-page-links">
            <div class="w-full">
                <h2>Usefull Links</h2>
            </div>
            <a href="{{route('about')}}" class="hover:underline">About</a> |
            <a href="{{route('termsAndConditions')}}" class="hover:underline">Terms & Conditions </a> |
            <a href="{{route('privacyPolicy')}}" class="hover:underline">Privacy Policies</a> |
            <a href="{{route('refundAndCancellation')}}" class="hover:underline">Refund and Cancellation</a> |
            <a href="{{route('contact')}}" class="hover:underline">Contact Us</a>
        </div>
    </div>
</div>

<!-- sidebar overly -->
<div id="site__sidebar__overly" 
    class="absolute top-0 left-0 z-20 w-screen h-screen xl:hidden backdrop-blur-sm"
    uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"> 
</div>
</div>