   <!-- main contents -->
   <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

<div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

    <div class="flex-1">
        <div class="max-w-[680px] w-full mx-auto content-area">

            <div class="page-heading">
            
                <h1 class="page-title"> Games </h1>

                <nav class="nav__underline">

                    <ul uk-switcher="connect: #tabs ; animation: uk-animation-fade"> 
                   
                        <li> <a href="#"> Suggestions </a> </li>
                        <li> <a href="#"> Popular </a> </li>
                        <li> <a href="#"> My games </a> </li>
                        
                    </ul> 

                </nav>

            </div>
             
            <div id="tabs" class="uk-switcher">

                <!-- tab 1-->
                <div class="grid md:grid-cols-4 grid-cols-3 md:gap-3 gap-2" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 20 ;repeat: true">

                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-1.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> Battle Grounds </h4></a>
                                <p class="card-text">365K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-1.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Battle Grounds </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-2.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> ChooxTv  </h4></a>
                                <p class="card-text">240K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-2.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> ChooxTv  </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-4.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm">  Mobile Legends  </h4></a>
                                <p class="card-text">420K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-4.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold">  Mobile Legends  </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-5.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> Minecraft </h4></a>
                                <p class="card-text">194K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-5.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Minecraft </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-5.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> Minecraft </h4></a>
                                <p class="card-text">194K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-5.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Minecraft </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-3.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm">Larion TV </h4></a>
                                <p class="card-text">512K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-3.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Larion TV </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-6.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> Fortninte </h4></a>
                                <p class="card-text">512K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-6.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Fortninte </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <a href="#">
                                <div class="card-media sm:aspect-[2/1.8] h-36">
                                    <img src="{{asset('front')}}/images/games/img-1.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="#"><h4 class="card-title text-sm"> Battle Grounds </h4></a>
                                <p class="card-text">365K Viewers</p>  
                            </div>
                        </div>
                        <div class="uk-drop w-80 max-md:!hidden" uk-drop="pos: right-center; boundary: !.content-area; offset: 10; animation: uk-animation-scale-up">
                            <div class="card shadow-xl">
                                <div class="card-media h-40">
                                    <img src="{{asset('front')}}/images/games/img-1.jpg" alt="">
                                    <div class="card-overly"></div>
                                </div>
                                <div class="card-body"  uk-scrollspy="target: > * ; cls: uk-animation-slide-bottom-small ; delay: 60 ;repeat: true">
                                    <h4 class="card-title text-sm font-semibold"> Battle Grounds </h4>
                                    <p class="card-text">365K Viewers</p> 
                                    <p class="text-sm mt-1.5"> Play match 3! Fight in battles, win, and claim your rewards!</p>
                                    <div class="flex gap-2 mt-2" uk-scrollspy-class="uk-animation-slide-top-small">
                                        <button type="button" class="button bg-secondery flex-1">Play</button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                                        <button type="button" class="button bg-secondery !w-auto"> <ion-icon name="bookmark" class="text-base"></ion-icon> </button>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tab 2-->
                <div tabindex="-1" uk-slider="finite:true">

                    <div class="uk-slider-container pb-1">
                       
                        <ul class="uk-slider-items grid-small">
                            <li class="md:w-1/4 sm:w-1/4 w-1/2">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-media sm:aspect-[2/1.8] h-36">
                                            <img src="{{asset('front')}}/images/games/img-5.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="#"><h4 class="card-title text-sm"> Minecraft </h4></a>
                                        <p class="card-text">620K Viewers</p>
                                        <button type="button" class="button border">Play now</button>
                                    </div>
                                </div>
                            </li>
                            <li class="md:w-1/4 sm:w-1/4 w-1/2">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-media sm:aspect-[2/1.8] h-36">
                                            <img src="{{asset('front')}}/images/games/img-3.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="#"><h4 class="card-title text-sm"> Larion TV </h4></a>
                                        <p class="card-text">365K Viewers</p>
                                        <button type="button" class="button border">Play now</button>
                                    </div>
                                </div>
                            </li> 
                            <li class="md:w-1/4 sm:w-1/4 w-1/2">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-media sm:aspect-[2/1.8] h-36">
                                            <img src="{{asset('front')}}/images/games/img-1.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="#"><h4 class="card-title text-sm"> Battle Grounds </h4></a>
                                        <p class="card-text">365K Viewers</p>
                                        <button type="button" class="button border">Play now</button>
                                    </div>
                                </div>
                            </li> 
                            <li class="md:w-1/4 sm:w-1/4 w-1/2">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-media sm:aspect-[2/1.8] h-36">
                                            <img src="{{asset('front')}}/images/games/img-2.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="#"><h4 class="card-title text-sm"> ChooxTv </h4></a>
                                        <p class="card-text">260K Viewers</p>
                                        <button type="button" class="button border">Play now</button>
                                    </div>
                                </div>
                            </li>
                            <li class="md:w-1/4 sm:w-1/4 w-1/2">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-media sm:aspect-[2/1.8] h-36">
                                            <img src="{{asset('front')}}/images/games/img-4.jpg" alt="">
                                            <div class="card-overly"></div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <a href="#"><h4 class="card-title text-sm">  Mobile Legends  </h4></a>
                                        <p class="card-text">230K Viewers</p>
                                        <button type="button" class="button border">Play now</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                
                    </div>
                   
                    <!-- slide nav icons -->
                    <a class="nav-prev !top-24" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                    <a class="nav-next !top-24" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                    
                </div>

                <!-- tab 3-->
                <div class="grid sm:grid-cols-2 gap-5" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 20 ;repeat: true">
               
                    <div class="card flex space-x-5 flex-row">
                        <a href="#">
                            <div class="card-media w-28 h-full shrink-0 overflow-hidden">
                                <img src="{{asset('front')}}/images/games/img-3.jpg" alt="" >
                                <div class="card-overly"></div>
                            </div> 
                        </a> 
                        <div class="card-body flex-1 pl-0">
                            <h4 class="card-title"> Larion TV </h4>
                            <p class="card-text mt-1 font-normal">192 friends playing</p>
                            <div class="flex gap-1.5 mt-3">
                                <button type="button" class="button border"> Play </button>
                                <button type="button" class="button border !w-auto"> <ion-icon name="arrow-redo" class="text-lg"></ion-icon> </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5 flex-row">
                        <a href="#">
                            <div class="card-media w-28 h-full shrink-0 overflow-hidden">
                                <img src="{{asset('front')}}/images/games/img-5.jpg" alt="" >
                                <div class="card-overly"></div>
                            </div> 
                        </a> 
                        <div class="card-body flex-1 pl-0">
                            <h4 class="card-title">  Minecraft  </h4>
                            <p class="card-text mt-1 font-normal">148 friends playing</p>
                            <div class="flex gap-1.5 mt-3">
                                <button type="button" class="button border"> Play </button>
                                <button type="button" class="button border !w-auto"> <ion-icon name="arrow-redo" class="text-lg"></ion-icon> </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5">
                        <a href="#">
                            <div class="card-media w-28 h-full shrink-0 overflow-hidden">
                                <img src="{{asset('front')}}/images/games/img-4.jpg" alt="" >
                                <div class="card-overly"></div>
                            </div> 
                        </a> 
                        <div class="card-body flex-1 pl-0">
                            <h4 class="card-title"> Mobile Legends</h4>
                            <p class="card-text mt-1 font-normal">216 friends playing</p>
                            <div class="flex gap-1.5 mt-3">
                                <button type="button" class="button border"> Play </button>
                                <button type="button" class="button border !w-auto"> <ion-icon name="arrow-redo" class="text-lg"></ion-icon> </button>
                            </div>
                        </div>
                    </div>
                    <div class="card flex space-x-5">
                        <a href="#">
                            <div class="card-media w-28 h-full shrink-0 overflow-hidden">
                                <img src="{{asset('front')}}/images/games/img-1.jpg" alt="" >
                                <div class="card-overly"></div>
                            </div> 
                        </a> 
                        <div class="card-body flex-1 pl-0">
                            <h4 class="card-title"> Battle Grounds </h4>
                            <p class="card-text mt-1 font-normal">320 friends playing</p>
                            <div class="flex gap-1.5 mt-3">
                                <button type="button" class="button border"> Play </button>
                                <button type="button" class="button border !w-auto"> <ion-icon name="arrow-redo" class="text-lg"></ion-icon> </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
          
            <!-- sub heading -->
            <div class="flex items-center justify-between text-black dark:text-white py-1 sm:mb-4 mb-3 mt-8">
                <h3 class="text-xl font-semibold"> Top Clip Streamers </h3>
                <a href="#" class="text-sm text-blue-500 hidden">See all</a>
            </div>

            <!-- tab -->
            <nav>
              
                <ul uk-tab class="flex gap-2 flex-wrap text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"  
                    uk-switcher="connect: #ttabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                    
                    <li> 
                        <a href="#" class="inline-flex items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:bg-black aria-expanded:text-white aria-expanded:dark:text-white aria-expanded:dark:border-white"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 01.878.645 49.17 49.17 0 01.376 5.452.657.657 0 01-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 00-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 01-.595 4.845.75.75 0 01-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 01-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 01-.658.643 49.118 49.118 0 01-4.708-.36.75.75 0 01-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 005.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 00.659-.663 47.703 47.703 0 00-.31-4.82.75.75 0 01.83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 00.657-.642z" />
                              </svg>
                            For You 
                        </a> 
                    </li>
                    <li> 
                        <a href="#" class="inline-flex items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm14.024-.983a1.125 1.125 0 010 1.966l-5.603 3.113A1.125 1.125 0 019 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113z" clip-rule="evenodd" />
                            </svg>
                            Play
                        </a> 
                    </li>
                    <li> 
                        <a href="#" class="inline-flex items-center gap-2 py-2 px-2.5 pr-3 bg-slate-200/60 rounded-full aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                                <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                            </svg>
                            Comunities 
                        </a> 
                    </li>

               </ul> 
            </nav>

            <!-- card list  -->
            <div class="box p-5 mt-6">

                <div class="card-list">
                    <a href="#">
                        <div class="card-list-media md:h-full">
                            <img src="{{asset('front')}}/images/games/img-lg-1.jpg" alt="" class="shadow">
                            <img src="{{asset('front')}}/images/icon-play.svg" class="!w-12 !h-12 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                        </div>
                    </a>
                    <div class="card-list-body">
                        <a href="#"> <h3 class="card-list-title">  Strike Force Heroes 2 </h3> </a>
                        <p class="card-list-text"> Lorem ipsum dolor sit amet, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>
                        <a href="#"> <div class="card-list-link"> John Michael </div> </a>
                        <div class="card-list-info text-xs">
                            <div> 27 weeks ago</div>
                            <div class="md:block hidden">·</div>
                            <div> 156.9K views</div>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider"></hr>

                <div class="card-list">
                    <a href="#">
                        <div class="card-list-media md:h-full">
                            <img src="{{asset('front')}}/images/games/img-lg-2.jpg" alt="" class="shadow">
                            <img src="{{asset('front')}}/images/icon-play.svg" class="!w-12 !h-12 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                        </div>
                    </a>
                    <div class="card-list-body">
                        <a href="#"> <h3 class="card-list-title"> Free Fire - Battlegrounds </h3> </a>
                        <p class="card-list-text"> Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>
                        <a href="#"> <div class="card-list-link"> Monroe Parker </div> </a>
                        <div class="card-list-info text-xs">
                            <div> 27 weeks ago</div>
                            <div class="md:block hidden">·</div>
                            <div> 156.9K views</div>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider"></hr>

                <div class="card-list">
                    <a href="#">
                        <div class="card-list-media md:h-full">
                            <img src="{{asset('front')}}/images/games/img-lg-3.jpg" alt="" class="shadow">
                            <img src="{{asset('front')}}/images/icon-play.svg" class="!w-12 !h-12 absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2" alt="">
                        </div>
                    </a>
                    <div class="card-list-body">
                        <a href="#"> <h3 class="card-list-title"> Clip Of Wolv strike </h3> </a>
                        <p class="card-list-text">  Lorem ipsum dolor sit amet, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>
                        <a href="#"> <div class="card-list-link"> Martin Gray </div> </a>
                        <div class="card-list-info text-xs">
                            <div> 27 weeks ago</div>
                            <div class="md:block hidden">·</div>
                            <div> 156.9K views</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex justify-center my-6">
                <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
            </div>

            
        </div>

    
    </div>

    <!-- sidebar -->
    <div class="2xl:w-[380px] lg:w-[330px] w-full">

        <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
              uk-sticky="media: 1024; end: #js-oversized; offset: 80">
              
            <div class="box p-5 px-6">

                <div class="flex items-baseline justify-between text-black dark:text-white">
                    <h3 class="font-bold text-base"> Top Games </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>

                <div class="side-list">

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/games/img-3.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Minecraft </h4></a>
                            <div class="side-list-info"> 258 are playing </div>
                        </div>
                        <button class="button border">Play</button>
                    </div>

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/games/img-4.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">  Mobile Legends </h4></a>
                            <div class="side-list-info"> 612 friends are playing </div>
                        </div>
                        <button class="button border">Play</button>
                    </div>  
                    
                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/games/img-3.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title"> Larion TV5 </h4></a>
                            <div class="side-list-info"> 428 friends are playing </div>
                        </div>
                        <button class="button border">Play</button>
                    </div>

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/games/img-6.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">  Fortninte </h4></a>
                            <div class="side-list-info"> 258 friends are playing </div>
                        </div>
                        <button class="button border">Play</button>
                    </div>

                    <div class="side-list-item">
                        <a href="#">
                            <img src="{{asset('front')}}/images/games/img-1.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="#"><h4 class="side-list-title">    Battle Grounds </h4></a>
                            <div class="side-list-info"> 612 friends are playing </div>
                        </div>
                        <button class="button border">Play</button>
                    </div>  
                    
                    <button class="bg-secondery button w-full mt-2 hidden">See all</button>

                </div>

            </div>

            <!-- peaple you might know -->
            <div class="box p-5 px-6 border1 dark:bg-dark2">
                            
                <div class="flex justify-between text-black dark:text-white">
                    <h3 class="font-bold text-base"> Peaple You might know </h3>
                    <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                </div>

                <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                    <div class="flex items-center gap-3">
                        <a href="{{route('timeline')}}"> 
                            <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Johnson smith</h4></a>
                            <div class="mt-0.5"> Suggested For You </div>
                        </div>
                        <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{route('timeline')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-5.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis</h4></a>
                            <div class="mt-0.5"> Followed by Johnson </div>
                        </div>
                        <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{route('timeline')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white"> John Michael</h4></a>
                            <div class="mt-0.5"> Followed by Monroe  </div>
                        </div>
                        <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{route('timeline')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Monroe Parker</h4></a>
                            <div class="mt-0.5"> Suggested For You </div>
                        </div>
                        <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                    </div> 
                    <div class="flex items-center gap-3">
                        <a href="{{route('timeline')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="bg-gray-200 rounded-full w-10 h-10">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('timeline')}}"><h4 class="font-semibold text-sm text-black dark:text-white">  Martin Gray</h4></a>
                            <div class="mt-0.5"> Suggested For You </div>
                        </div>
                        <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                    </div>
                </div>

            </div>
            
        </div>

    </div>

</div>

</main>

</div>
