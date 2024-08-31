
<!-- header -->
   <header class="z-[100] header-topbar w-full md:w-auto md:px-20 fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

<div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">

    <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">

        <!-- left -->
        <div class="flex items-center gap-1"> 

            <!-- icon menu -->
            <button uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"
                    class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group"> 
                    <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                    <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
            </button>

            <div id="logo">
                <a href="{{route('index')}}"> 
                    <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt="" class="main-logo md:block hidden dark:!hidden">
                    <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt="" class="main-logo dark:md:block hidden">
                    <img src="{{asset('front/images/web')}}/barodaplus-logo.png" class="main-logo hidden max-md:block w-20 dark:!hidden" alt="">
                    <img src="{{asset('front/images/web')}}/barodaplus-logo.png" class="main-logo hidden dark:max-md:block w-20" alt="">
                </a>
            </div>
             
        </div>

    </div>
    
    <div class="flex-1 relative">

        <div class="max-w-[1220px] mx-auto flex items-center">
            
            <!-- search -->
            <div id="search--box" class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                <input type="text" placeholder="Search Friends, videos .." class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm no-border">
            </div>  
            
            <!-- search dropdown-->
            <div class="hidden uk- open z-10"
                    uk-drop="pos: bottom-center ; animation: uk-animation-slide-bottom-small;mode:click ">
                
                    <div class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                        <div class="flex justify-between px-2 py-2.5 text-sm font-medium"> 
                            <div class=" text-black dark:text-white">Recent</div>
                            <button type="button" class="text-blue-500">Clear</button>
                        </div>
                        <nav class="text-sm font-medium text-black dark:text-white">
                            <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Jesse Steeve </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                            <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Martin Gray </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                            <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="{{asset('front')}}/images/group/group-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Delicious Foods  </div>  <div class="text-xs text-rose-500 font-medium mt-0.5">  Group </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                            <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="{{asset('front')}}/images/group/group-1.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Delicious Foods  </div>  <div class="text-xs text-yellow-500 font-medium mt-0.5">  Page </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                            <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  John Welim </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                            <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  Creative ideas about Business  </a>  
                            <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  8 Facts About Writting  </a>  
                        </nav>
                        <hr class="-mx-2 mt-2 hidden">
                        <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden"> 
                            <a href="#" class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded"> <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your history</a> 
                        </div>
                    </div>
                    
            </div>
            
            @if(Auth::check())
                 
                <div class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
              
                
                    <!-- notification -->
                    <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Notification; pos: bottom; offset:6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 max-sm:hidden">
                            <path d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
                            <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z" clip-rule="evenodd" />
                        </svg>
                        <div class="absolute top-0 right-0 -m-1 bg-red-600 text-white text-xs px-1 rounded-full">6</div>
                        <ion-icon name="notifications-outline" class="sm:hidden text-2xl"></ion-icon>
                    </button> 
                    <div  class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[365px] w-screen border2"
                        uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                    
                        <!-- heading -->
                        <div class="flex items-center justify-between gap-2 p-4 pb-2">
                            <h3 class="font-bold text-xl"> Notifications </h3>

                            <div class="flex gap-2.5"> 
                                <button type="button" class="p-1 flex rounded-full focus:bg-secondery dark:text-white"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                                <div  class="w-[280px] group" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click; offset:5"> 
                                    <nav class="text-sm"> 
                                        <a href="#"> <ion-icon class="text-xl shrink-0" name="checkmark-circle-outline"></ion-icon>  Mark all as read</a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0" name="settings-outline"></ion-icon> Notification setting</a>  
                                        <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                    </nav>
                                </div> 
                            </div>
                        </div>

                        <div class="text-sm h-[400px] w-full overflow-y-auto pr-2">
                            <div class="pl-2 p-1 text-sm font-normal dark:text-white">
                                
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Alexa Gray</b> started following you. Welcome him to your profile. 👋 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours ago </div>
                                        <div class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5"></div>
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1">Jesse Steeve</b> mentioned you in a story. Check it out and reply. 📣 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Alexa stella</b> commented on your photo  “Wow, stunning shot!” 💬 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 "> 
                                        <p> <b class="font-bold mr-1"> John Michael</b> who you might know,  is on socialite.</p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 2 hours ago </div>
                                    </div>
                                    <button type="button" class="button text-white bg-primary">fallow</button>
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Sarah Gray</b> sent you a message. He wants to chat with you. 💖 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours ago </div>
                                        <div class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5"></div>
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Jesse Steeve</b> sarah tagged you <br> in a photo of your birthday party. 📸 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div>
                                    </div> 
                                </a>
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Lewis Lewis</b> mentioned you in a story. Check it out and reply. 📣 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                    </div>
                                </a> 
                                <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-12 h-12 shrink-0"> <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                    <div class="flex-1 ">
                                        <p> <b class="font-bold mr-1"> Martin Gray</b> liked your photo of the Eiffel Tower. 😍 </p>
                                        <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                    </div>
                                </a>
                                
                            </div>

                        </div> 


                        <!-- footer -->
                        <a href="#">
                            <div class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">  View Notifications </div>
                        </a>

                        <div class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent"></div>
                    </div>

                    <!-- messages -->
                    <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Messages; pos: bottom; offset:6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 max-sm:hidden">
                            <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd"></path>
                        </svg>
                        <ion-icon name="chatbox-ellipses-outline" class="sm:hidden text-2xl"></ion-icon>
                    </button>
                    <div  class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[360px] w-screen border2"
                        uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                    
                        <!-- heading -->
                        <div class="flex items-center justify-between gap-2 p-4 pb-1">
                            <h3 class="font-bold text-xl"> Chats </h3>

                            <div class="flex gap-2.5 text-lg text-slate-900 dark:text-white">
                                <ion-icon name="expand-outline"></ion-icon>
                                <ion-icon name="create-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="relative w-full p-2 px-3 ">
                            <input type="text" class="w-full !pl-10 !rounded-lg dark:!bg-white/10" placeholder="Search">
                            <ion-icon name="search-outline" class="dark:text-white absolute left-7 -translate-y-1/2 top-1/2"></ion-icon>
                        </div>
                        
                        <div class="h-80 overflow-y-auto pr-2">
                            
                            <div class="p-2 pt-0 pr-1 dark:text-white/80">

                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM </div>
                                            <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Love your photos 😍</div>
                                    </div>
                                </a>  
                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Martin Gray</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 02:40AM </div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Product photographer wanted? 📷</div>
                                    </div>
                                </a>  
                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 2 day </div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Want to buy landscape photo? 🌄</div>
                                    </div>
                                </a>  
                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Monroe Parker</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 4 week </div>
                                            <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">I’m glad you like it.😊</div>
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Alex Dolve</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 2 month </div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Photo editor needed. Fix photos? 🛠️</div>
                                    </div>
                                </a>
                                <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                    <div class="relative w-10 h-10 shrink-0"> 
                                        <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                            <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM </div>
                                        </div>
                                        <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Love your photos 😍</div>
                                    </div>
                                </a>

                            </div>

                        </div> 


                        <!-- footer -->
                        <a href="#">
                            <div class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">   See all Messages  </div>
                        </a>

                        <div class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent"></div>
                    </div>

                    <!-- profile -->
                    <div  class="rounded-full relative bg-secondery cursor-pointer shrink-0">
                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="sm:w-9 sm:h-9 w-7 h-7 rounded-full shadow shrink-0"> 
                    </div>
                    <div  class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                        uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                        
                        <a href="{{route('timeline')}}">
                            <div class="p-4 py-5 flex items-center gap-4">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 h-10 rounded-full shadow"> @if(getUserData()){{getUserData()['first_name']}} {{getUserData()['last_name']}}@endif
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
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    My Account
                                </div>
                            </a>

                            <hr class="-mx-2 my-2 dark:border-gray-600/60">
                            <a href="{{route('logout')}}">
                                <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Log Out 
                                </div>
                            </a>

                        </nav>

                    </div> 

                    <div class="flex items-center gap-2 hidden">

                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">

                        <div class="w-20 font-semibold text-gray-600"> Hamse </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg> 

                    </div> 
                </div>

            @else
            <a href="{{route('login')}}" class="button flex-1 flex items-center gap-2 text-dark text-sm uk-scrollspy-inview ">free business listing</a>            
                <a href="{{route('login')}}" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm uk-scrollspy-inview ">Login</a>
            @endif

        </div> 

    </div>

</div>

</header>