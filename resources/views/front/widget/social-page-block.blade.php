   <!-- main contents -->
   <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

<div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

    <div class="flex-1">

        <div class="max-w-[680px] w-full mx-auto">

            <div class="page-heading">
                
                <h1 class="page-title"> Pages </h1>

                <nav class="nav__underline">

                    <ul class="group" uk-switcher="connect: #page-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                
                        <li> <a href="#"> Suggestions  </a> </li>
                        <li> <a href="#"> Popular </a> </li>
                        <li> <a href="#"> My pages </a> </li>
                        
                    </ul> 

                </nav>

            </div>

            <!-- page feautred -->
            <div tabindex="-1" uk-slider="finite:true">

                <div class="uk-slider-container pb-1">
                
                    <ul class="uk-slider-items grid-small">
                        
                        <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                            <div class="card uk-transition-toggle">
                                <a href="{{route('timeline-page')}}">
                                    <div class="card-media sm:aspect-[2/1.9] h-40">
                                        <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                </a>
                                <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                    <p class="card-text text-xs text-white/80"> Japan </p>
                                    <a href="{{route('timeline-page')}}">
                                        <h4 class="card-title text-sm mt-0.5 !text-white"> Jesse Steeve </h4>
                                    </a>
                                </div>
                                <!-- close -->
                                <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                    <ion-icon name="close" class="text-white"></ion-icon>
                                </button>
                            </div>
                        </li> 

                        <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                            <div class="card uk-transition-toggle"> 
                                <a href="{{route('timeline-page')}}">
                                    <div class="card-media sm:aspect-[2/1.9] h-40">
                                        <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                </a>
                                <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                    <p class="card-text text-xs text-white/80"> Turkey</p>
                                    <a href="{{route('timeline-page')}}">
                                        <h4 class="card-title text-sm mt-0.5 !text-white"> John Michael </h4>
                                    </a>
                                </div>
                                <!-- close -->
                                <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                    <ion-icon name="close" class="text-white"></ion-icon>
                                </button>
                            </div>
                        </li> 

                        <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                            <div class="card uk-transition-toggle">
                                <a href="{{route('timeline-page')}}">
                                    <div class="card-media sm:aspect-[2/1.9] h-40">
                                        <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                </a>
                                <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                    <p class="card-text text-xs text-white/80"> Dubai</p>
                                    <a href="{{route('timeline-page')}}">
                                        <h4 class="card-title text-sm mt-0.5 !text-white"> Monroe Parker </h4>
                                    </a>
                                </div>
                                <!-- close -->
                                <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                    <ion-icon name="close" class="text-white"></ion-icon>
                                </button>
                            </div>
                        </li> 

                        <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                            <div class="card uk-transition-toggle">
                                <a href="{{route('timeline-page')}}">
                                    <div class="card-media sm:aspect-[2/1.9] h-40">
                                        <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                </a>
                                <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                    <p class="card-text text-xs text-white/80"> London</p>
                                    <a href="{{route('timeline-page')}}">
                                        <h4 class="card-title text-sm mt-0.5 !text-white"> Martin Gray </h4>
                                    </a>
                                </div>
                                <!-- close -->
                                <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                    <ion-icon name="close" class="text-white"></ion-icon>
                                </button>
                            </div>
                        </li>
                        
                        <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                            <div class="card uk-transition-toggle">
                                <a href="{{route('timeline-page')}}">
                                    <div class="card-media sm:aspect-[2/1.9] h-40">
                                        <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="">
                                        <div class="card-overly"></div>
                                    </div>
                                </a>
                                <div class="card-body p-3 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60">
                                    <p class="card-text text-xs text-white/80"> country6</p>
                                    <a href="{{route('timeline-page')}}">
                                        <h4 class="card-title text-sm mt-0.5 !text-white"> Alexa stella </h4>
                                    </a>
                                </div>
                                <!-- close -->
                                <button type="button" class="uk-transition-fade absolute top-0 right-0 m-2 z-10 bg-black/20 rounded-full flex p-1">
                                    <ion-icon name="close" class="text-white"></ion-icon>
                                </button>
                            </div>
                        </li> 
                        
                    </ul>
            
                </div>
            
                <!-- slide nav icons -->
                <a class="nav-prev" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                <a class="nav-next" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                
            </div>

            <div id="page-tabs" class="uk-switcher mt-10">

                <!-- pages card layout 1 -->

                <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Monroe Parker </h4> </a>
                            <p class="card-text">125k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title">Martin Gray </h4> </a>
                            <p class="card-text"> 320k Following  </p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> James Lewis </h4> </a> 
                            <p class="card-text">192k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div> 
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title">Alexa stella </h4> </a>
                            <p class="card-text">flow6</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> John Michael </h4> </a> 
                            <p class="card-text">260k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body"> 
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Monroe Parker </h4> </a>
                            <p class="card-text">125k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Monroe Parker </h4> </a> 
                            <p class="card-text">320k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title">Martin Gray </h4> </a>
                            <p class="card-text">320k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media sm:aspect-[2/1.7] h-40">
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> James Lewis </h4> </a> 
                            <p class="card-text">192k Following</p>
                            <button type="button" class="button bg-primary text-white">Follow</button>
                        </div>
                    </div> 

                    <!-- load more -->
                    <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                        <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                    </div>

                </div>
                
                <!-- pages card layout 2-->

                <div class="grid sm:grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Jesse Steeve </h4> </a>
                            <p class="card-text"> 162k Following </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> John Michael </h4> </a>
                            <p class="card-text"> 260k Following </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Monroe Parker </h4> </a>
                            <p class="card-text"> 125k Following</p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Martin Gray</h4> </a>
                            <p class="card-text"> 320k Following </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> James Lewis</h4> </a>
                            <p class="card-text"> 320k Following5 </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-6.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Alexa stella</h4> </a>
                            <p class="card-text"> flow6 </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> Jesse Steeve </h4> </a>
                            <p class="card-text"> 162k Following </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 p-5">
                        <a href="{{route('timeline-page')}}">
                            <div class="card-media w-16 h-16 shrink-0 rounded-full">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body flex-1 p-0">
                            <a href="{{route('timeline-page')}}"> <h4 class="card-title"> John Michael </h4> </a>
                            <p class="card-text"> 260k Following </p>
                            <div class="flex gap-1 mt-1">
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">  
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                    Liked
                                </button>
                                <button type="button" class="button bg-primary-soft text-primary dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                                    </svg>
                                    Message
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- load more -->
                    <div class="flex justify-center my-6 sm:col-span-2">
                        <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                    </div>

                </div>


                <!-- pages card layout 3 -->

                <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-1.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Jesse Steeve </h4>
                            <p class="card-text"> 125k Following1 </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> John Michael </h4>
                            <p class="card-text"> 260k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-3.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Monroe Parker </h4>
                            <p class="card-text"> 125k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-4.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Martin Gray </h4>
                            <p class="card-text"> 320k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-5.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> James Lewis </h4>
                            <p class="card-text"> 192k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-1.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Jesse Steeve </h4>
                            <p class="card-text"> 125k Following1 </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-1.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Jesse Steeve </h4>
                            <p class="card-text"> 125k Following1 </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-3.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> Monroe Parker </h4>
                            <p class="card-text"> 125k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-media sm:h-24 h-16">
                            <img src="{{asset('front')}}/images/group/group-cover-2.jpg" alt="">
                            <div class="card-overly"></div>
                        </div>
                        <div class="card-body relative z-10">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white">
                            <h4 class="card-title"> John Michael </h4>
                            <p class="card-text"> 260k Following </p>
    
                            <div class="flex gap-2">
                                <button type="button" class="button bg-primary text-white flex-1">Join</button>
                                <button type="button" class="button bg-secondery !w-auto">View</button>
                            </div>
                            
                        </div>
                    </div>

                    <!-- load more -->
                    <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                        <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                    </div>

                
                </div>

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
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 2 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 4 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Jesse Steeve</h4></a>
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
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 6 day ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 2 month ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Jesse Steeve</h4></a>
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
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-primary text-white">Like</button>
                    </div>
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-full"> 
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 4 week ago </div>
                        </div>
                        <button class="button bg-primary text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Monroe Parker</h4></a>
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