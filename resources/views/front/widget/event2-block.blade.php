     <!-- main contents -->
     <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

<div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6" id="js-oversized">

    <div class="flex-1">

        <div class="max-w-[680px] w-full mx-auto">

            <div class="page-heading mb-2">
                
                <h1 class="page-title has:[.ww]:text-sky-500 ww">Events  </h1>
                
                <!-- filter button -->
                <nav class="borde-b dark:border-slate-700 mt-6 pb-3">
                        
                    <ul class="flex gap-3 text-sm text-center text-gray-600 capitalize font-semibold dark:text-white/80"> 
                          
                        <li> 
                            <button type="button" class="button p-2 px-3 bg-white shadow-sm gap-1 border1 dark:bg-slate-700 group"> 
                                <ion-icon name="location-outline" class="text-lg"></ion-icon>
                                My location 
                                <ion-icon name="chevron-down-outline" class="duration-300 -mr-0.5 text-base group-aria-expanded:rotate-180"></ion-icon>
                            </button> 
                            <div  class="p-3 bg-white rounded-lg drop-shadow-xl border2 dark:bg-dark3 w-64"
                                    uk-drop="offset:10; mo de : cli ck ; pos: bottom-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-left">
                                    
                                    <div class="max-md:mt-3 w-full text-black font-medium dark:text-white">
                                        
                                        <label>
                                            <input type="radio" name="radio-location" class="peer appearance-none hidden" checked/>
                                            <div class=" relative flex items-center gap-3  cursor-pointer rounded-md p-2  hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                                <ion-icon name="navigate" class="text-lg"></ion-icon>
                                                <div class="text-sm"> My location </div> 
                                                <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl ml-auto text-blue-600 uk-animation-scale-up"></ion-icon>
                                            </div>
                                        </label> 
                                        <label>
                                            <input type="radio" name="radio-location" class="peer appearance-none hidden"  />
                                            <div class=" relative flex items-center gap-3  cursor-pointer rounded-md p-2 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                                <ion-icon name="globe" class="text-lg"></ion-icon>
                                                <div class="text-sm"> Online </div> 
                                                <ion-icon name="checkmark-circle" class="hidden active absolute -translate-y-1/2 right-2 text-2xl ml-auto text-blue-600 uk-animation-scale-up"></ion-icon>
                                            </div>
                                        </label> 
        
                                    </div>

                                    <div class="w-3 h-3 absolute -top-1.5 left-3 bg-white rotate-45 border-l border-t dark:bg-dark3 dark:border-transparent"></div>

                            </div>

                        </li>
                        <li> 
                            <button type="button" class="button p-2 px-3 bg-white shadow-sm gap-1 border1 dark:bg-dark3 group"> 
                                <ion-icon name="chevron-down" class="text-sm" hidden></ion-icon>
                                <ion-icon name="calendar-clear-outline" class="text-sm"></ion-icon>
                                Any Date 
                                <ion-icon name="chevron-down-outline" class="duration-300 -mr-0.5 text-base group-aria-expanded:rotate-180"></ion-icon>
                            </button> 
                            <div  class="p-3 bg-white rounded-lg drop-shadow-xl border2 dark:bg-dark3 w-72"
                            uk-drop="offset:10; mo de : cli ck ; pos: bottom-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-left">
                            
                            <div class="max-md:mt-3 w-full">
                                
                                <div class="max-md:mt-3 w-full text-black font-medium dark:text-white">
                                        
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> Today</span>
                                            <input type="radio" name="radio-date"  checked  value="1" />
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> Tomorrow </span>
                                            <input type="radio" name="radio-date" value="2" />
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> This week </span>
                                            <input type="radio" name="radio-date" value="3" />
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> This weekend </span>
                                            <input type="radio" name="radio-date" value="3" />
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> Next week </span>
                                            <input type="radio" name="radio-date" value="3" />
                                        </label>
                                    </div>
                                    <div>
                                        <label class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                            <span> Next week </span>
                                            <input type="radio" name="radio-date" value="3" />
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between cursor-pointer rounded-md p-2 hover:bg-secondery">
                                        <span> Custom date range</span>
                                        <ion-icon name="chevron-forward-outline" class="duration-300 text-xl"></ion-icon>
                                    </div>
    
                                </div>

                            </div>

                            <div class="w-3 h-3 absolute -top-1.5 left-3 bg-white rotate-45 border-l border-t dark:bg-dark3 dark:border-transparent"></div>
                            </div>

                        </li>
                        <li> 
                            <button type="button" class="button p-2 px-3 bg-white shadow-sm gap-1 border1 dark:bg-slate-700"> 
                                <ion-icon name="add" class="text-lg"></ion-icon>
                                Create  
                            </button> 
                            
                        </li>
                        
                    </ul> 
                    
                </nav>

            </div>

            <!-- card list  -->
            <div class="box p-5">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-1.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-red-600 mb-1"> WED JUL 10,2024 AT 10PM </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> The global creative  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">UK BRANDS</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-2.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-teal-600 mb-1"> Upcomming </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> Wedding trend Ideas  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">Catiana</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-3.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-blue-600 mb-1"> Next week </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> About Safety and Flight  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">Morleam</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-4.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-red-600 mb-1"> Tomorrow </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> Perspective is everything  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">UK BRANDS</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-1.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-red-600 mb-1"> WED JUL 10,2024 AT 10PM </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> The global creative  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">UK BRANDS</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
                        </div>
                    </div>
                </div>

                <hr class="card-list-divider">

                <div class="card-list">
                    <a href="{{route('timeline-event')}}">
                        <div class="card-list-media md:w-40 md:h-full w-full h-36">
                            <img src="{{asset('front')}}/images/events/img-2.jpg" alt="">
                        </div>
                    </a>
                    <div class="md:flex gap-10 md:items-end flex-1">
                        <div class="card-list-body">
                            <P class="text-xs font-medium  text-teal-600 mb-1"> Upcomming </P>
                            <a href="{{route('timeline-event')}}"> 
                                <h3 class="card-list-title text-base line-clamp-1"> Wedding trend Ideas  </h3> 
                            </a>
                            <P class="text-xs font-medium mb-1 mt-3 text-black dark:text-white">Catiana</P>
                            <div class="card-list-info text-xs">
                                <div> 272 Interested</div>
                                <div class="md:block hidden">·</div>
                                <div> 126.9K going</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 self-end pt-2 sm:justify-end">
                            <button type="button" class="button bg-secondery max-sm:flex-1">Interested </button>
                            <button type="button" class="button bg-secondery px-2.5 py-2"> <ion-icon name="arrow-redo" class="text-base"></ion-icon> </button>
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
                    <h3 class="font-bold text-base"> Pages You Manage </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>
            
                <div class="side-list">

                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 2 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-md"> 
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 4 day ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 3 week ago </div>
                        </div>
                        <button class="button bg-secondery">Edit</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-md">
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
                    <h3 class="font-bold text-base"> Suggested Manage </h3>
                    <a href="#" class="text-sm text-blue-500">See all</a>
                </div>

                <div class="side-list">

                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title">  John Michael</h4></a>
                            <div class="side-list-info"> Updated 6 day ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="side-list-image rounded-md"> 
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Martin Gray</h4></a>
                            <div class="side-list-info"> Updated 2 month ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Monroe Parker</h4></a>
                            <div class="side-list-info"> Updated 1 week ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                    <div class="side-list-item">
                        <a href="{{route('groupDetail')}}">
                            <img src="{{asset('front')}}/images/avatars/avatar-1.jpg" alt="" class="side-list-image rounded-md">
                        </a>
                        <div class="flex-1">
                            <a href="{{route('groupDetail')}}"><h4 class="side-list-title"> Jesse Steeve</h4></a>
                            <div class="side-list-info"> Updated 2 day ago </div>
                        </div>
                        <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                    </div>  
                     
                </div>

                <button class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm dark:text-white mt-2">See all</button>

            </div>

        </div> 

    </div>

</div>

</main>

</div>